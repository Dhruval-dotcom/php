function debounce(func, timeout = 500) {
  let timer;
  return (...args) => {
    clearTimeout(timer);
    timer = setTimeout(() => {
      func.apply(this, args);
    }, timeout);
  };
}



fetch = () => {
  $('#content').html($('#content').html()+'<br> clicked');
};

const fun = debounce(fetch);
