import './style.css';
import * as THREE from 'three';

// Canvas
const canvas = document.querySelector('canvas.webgl');

// Scene
const scene = new THREE.Scene();

/**
 * Objects *MESH CUBE
 */
// const geometry = new THREE.BoxGeometry(1, 1, 1)
// const material = new THREE.MeshBasicMaterial({ color: 0xff0000 })
// const mesh = new THREE.Mesh(geometry, material)
// // mesh.position.x = 0.7
// // mesh.position.y = -0.6
// // mesh.position.z = 1
// // mesh.position.normalize()
// scene.add(mesh)

// mesh.position.set(0.9, -0.6, 1)

// // Scale
// // mesh.scale.x = 2
// // mesh.scale.y = 0.5
// // mesh.scale.z = 0.5
// mesh.scale.set(2, 0.5, 0.5)

// Objects *GROUP
const group = new THREE.Group();
group.position.y = 0.7;
group.position.z = 3;
group.scale.y = 2;
group.rotation.y = 0.7;
group.rotation.x = 0.6;

scene.add(group);

const cube1 = new THREE.Mesh(
  new THREE.BoxGeometry(2, 1, 1),
  new THREE.MeshBasicMaterial({ color: 0xff0ff0 })
);
cube1.position.y = -0.2;
cube1.position.z = 3;
group.add(cube1);

const cube2 = new THREE.Mesh(
  new THREE.BoxGeometry(1, 0.5, 1),
  new THREE.MeshBasicMaterial({ color: 0xf0ff00 })
);
cube2.position.x = -2;
cube2.position.y = 1;
group.add(cube2);

const cube3 = new THREE.Mesh(
  new THREE.BoxGeometry(1, 3, 1),
  new THREE.MeshBasicMaterial({ color: 0x00f0ff })
);
cube3.position.x = 2;
cube3.position.y = -0.01;
group.add(cube3);

// Rotation
// mesh.rotation.reorder('YXZ')
// mesh.rotation.x = Math.PI * 0.25
// mesh.rotation.y = Math.PI * 0.25

// Axes helper
const axesHelper = new THREE.AxesHelper(2);
scene.add(axesHelper);

// // Important

// console.log(mesh.position.length())

/**
 * Sizes
 */
const sizes = {
  width: 800,
  height: 600,
};

/**
 * Camera
 */
// const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height) FOV, ASPECT RATIO
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height);
camera.position.z = 10;

// camera.position.y = 1
// camera.position.x = 1
scene.add(camera);
// camera.lookAt(mesh.position)
// console.log(mesh.position.distanceTo(camera.position))

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
  canvas: canvas,
});
renderer.setSize(sizes.width, sizes.height);
renderer.render(scene, camera);
