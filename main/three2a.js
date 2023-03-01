'use strict';


// threejs

function main() {
  const canvas = document.querySelector('.d');
  const renderer = new THREE.WebGLRenderer({
    canvas,
    alpha: true,
  });
// camera


  const fov = 100;
  const aspect = 2;  // the canvas default
  const near = 0;
  const far = 1;
  const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
//   camera.position.z = 6;
  camera.position.z = 0
  camera.position.x = 0
  camera.position.y = 0




// start scene
  const scene = new THREE.Scene();

  {
    // add light
    const color = 0xffffff;
    const intensity = 1;
    const light = new THREE.DirectionalLight(color, intensity);
    light.position.set(1, 2, 4);
    scene.add(light);
  }
  

// geometry

  const geometry = new THREE.TorusGeometry( 3, 5, 100, 100 );
  

// mesh
  function makeInstance(geometry, color, x) {
    const material = new THREE.MeshBasicMaterial( { color } );
    const mesh = new THREE.Mesh( geometry, material );
    scene.add( mesh );
    mesh.position.x = x;
    return mesh;
  }

  const meshinstance = [
    makeInstance(geometry, 0x003049,  0),
    makeInstance(geometry, 0xd62828, 0.1),
    makeInstance(geometry, 0xf77f00, 0.2),
    makeInstance(geometry, 0xfcbf49, 0.3),
    makeInstance(geometry, 0xeae2b7, 0.4)
   
   
  ];
  

  function resizeRendererToDisplaySize(renderer) {
    const canvas = renderer.domElement;
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
    const needResize = canvas.width !== width || canvas.height !== height;
    if (needResize) {
      renderer.setSize(width, height, false);
    }
    return needResize;
  }

  function render(time) {
    time *= 0.01;

    if (resizeRendererToDisplaySize(renderer)) {
      const canvas = renderer.domElement;
      camera.aspect = canvas.clientWidth / canvas.clientHeight;
      camera.updateProjectionMatrix();
    }

    meshinstance.forEach((mesh, ndx) => {
      const speed = 0.0001 + ndx * .01;
      const rot = time * speed;
    //   cube.rotation.x = rot * rot;
    //   mesh.rotation.z = 2;
    //   mesh.scale.x = rot * rot * 10 * rot * 10 * rot;
    //   mesh.scale.z = rot * rot * -9;
    //   mesh.rotation.y = rot * -1;
    //   mesh.rotation.x = 1.5 + rot;
    //   cube.scale.y = rot + 200;
    //   cube.scale.y = rot;
    });
    

    renderer.render(scene, camera);

    requestAnimationFrame(render);
  }

  requestAnimationFrame(render);
  
}

main();