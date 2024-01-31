function component() {
  let element = document.createElement('div');

  require('./main.js');
  // require('./iphone_XS_files/main.js');

  return element;
}

document.body.appendChild(component());
