const matches = (obj,source)=>Object.keys(source).every(keys=>obj.hasOwnProperty(keys)&&obj[keys]===source[keys]);
console.log(matches({bread:45 , age:32},{bread:21,age:21}));