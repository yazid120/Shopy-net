function useState(defaultValue) {
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