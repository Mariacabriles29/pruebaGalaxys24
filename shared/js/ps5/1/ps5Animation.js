const container = document.getElementById("container");
const header = document.getElementById("header");

container.classList.add("opacity");
header.classList.add("opacity");

setTimeout(() => {
  container.classList.remove("opacity");
  header.classList.remove("opacity");
}, 3000);

var faPS5_ALT = {
  prefix: "fac",
  iconName: "ps5-alt",
  icon: [
    320,
    100,
    [],
    null,
    "M207.11,22.44V43a9.37,9.37,0,0,0,9.37,9.37h49.91a9.43,9.43,0,0,1,0,18.85H207.11v6.32H272a15.75,15.75,0,0,0,0-31.49H222.8A3.77,3.77,0,0,1,219,42.31V28.76h66.54V22.44Zm-46.16,0A14.92,14.92,0,0,0,146,37.36V62.81a8.43,8.43,0,0,1-8.43,8.43H108.89v6.32H143A14.92,14.92,0,0,0,158,62.64V37.19a8.43,8.43,0,0,1,8.43-8.43h29.25V22.44Zm-128.68,0v6.32h60a8.66,8.66,0,1,1,0,17.31H47.18A14.92,14.92,0,0,0,32.27,61V77.56H44.19V60.82a8.42,8.42,0,0,1,8.43-8.43H97.84a15,15,0,1,0,0-29.95Z"
  ]
};


