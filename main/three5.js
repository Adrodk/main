'use strict';

/* global THREE */

function main() {
  const canvas = document.querySelector('.c');
  const renderer = new THREE.WebGLRenderer({
    canvas,
    alpha: true,
  });

  const fov = 25;
  const aspect = 2; // the canvas default
  const near = 2;
  const far = 5;
  const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
  camera.position.z = 4.8;
  camera.position.x = 2;
  camera.position.y = 1;

  const scene = new THREE.Scene();

  {
    const color = 0xffffff;
    const intensity = 1;
    const light = new THREE.DirectionalLight(color, intensity);
    light.position.set(1, 2, 3);
    scene.add(light);
  }

  const geometry = new THREE.TorusGeometry(20, 0.5, 30, 200);

  function makeInstance(geometry, color, x) {
    const material = new THREE.MeshBasicMaterial({ color });

    const cube = new THREE.Mesh(geometry, material);
    scene.add(cube);

    cube.position.x = x;

    return cube;
  }

  const cubes = [makeInstance(geometry, 0x000000, 2)];

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

    cubes.forEach((cube, ndx) => {
      const speed = 0.00002 + ndx * 0.005;
      const rot = time * speed;
      //   cube.rotation.x = rot * rot;

      cube.scale.z = rot * rot;

      cube.scale.x = 5;
      cube.scale.y = rot * 0.01;
      cube.rotation.z = rot * 0.8;
    });

    renderer.render(scene, camera);

    requestAnimationFrame(render);
  }

  requestAnimationFrame(render);
}

main();
