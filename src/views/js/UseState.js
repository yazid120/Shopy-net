export function UseState(defaultValue) {
    // 👆🏻We create a function useState with a default value
    let value = defaultValue;
    function getValue() {
      return value;
    }
    function setValue(newValue) {
      value = newValue;
    }
    return [getValue, setValue];
}


export const notReact = (function() {
  let hooks = [];
  let idx = 0;

  function useEffect(callback, dependancyArray) {
    const oldDependancies = hooks[idx];
    let hasChanged = true;
    if (oldDependancies) {
      hasChanged = dependancyArray.some((dep, i) => !Object.is(dep, oldDependancies[i]));
    }
    hooks[idx] = dependancyArray;
    idx++;
    if (hasChanged) callback();
  }

  return {useState, useEffect, init, render, addOnClick};
})();

export function UseEffect(){
return('use state'); 
}
