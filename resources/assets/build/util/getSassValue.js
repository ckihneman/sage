var sass = require('node-sass');
var sassUtils = require('node-sass-utils')(sass);

/**
 * Share JavaScript variables with Sass
 *
 * @link https://itnext.io/sharing-variables-between-js-and-sass-using-webpack-sass-loader-713f51fa7fa0
 */

// CSS Units
const CSS_UNITS = [
  'rem',
  'em',
  'vh',
  'vw',
  'vmin',
  'vmax',
  'ex',
  '%',
  'px',
  'cm',
  'mm',
  'in',
  'pt',
  'pc',
  'ch',
];

// Convert string to proper Sass dimention
const convertStringToSassDimension = function(result) {
  // Only attempt to convert strings
  if (typeof result !== 'string') {
    return result;
  }
  const parts = result.match(/[a-zA-Z]+|[0-9]+/g);
  const value = parts[0];
  const unit = parts[parts.length - 1];
  if (CSS_UNITS.indexOf(unit) !== -1) {
    result = new sassUtils.SassDimension(parseInt(value, 10), unit);
  }
  return result;
};

// Convert a JavaScript object into a Sass set
const getSassValue = function(sassVars) {
  return function(keys) {
    keys = keys.getValue().split('.');
    let result = sassVars;
    let i;
    for (i = 0; i < keys.length; i++) {
      result = result[keys[i]];
      if (typeof result === 'string') {
        result = convertStringToSassDimension(result);
      } else if (typeof result === 'object') {
        Object.keys(result).forEach(function(key) {
          const value = result[key];
          result[key] = convertStringToSassDimension(value);
        });
      }
    }
    return sassUtils.castToSass(result);
  };
};

module.exports = getSassValue;
