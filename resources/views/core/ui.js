/**
 * UI Configuration
 *
 * Use polished.js for value manipulation, only if needed.
 * @link https://polished.js.org/docs/
 */

//  Colors
const color = {
  black: {
    500: '#000',
  },
  white: {
    500: '#FFF',
  },

  // Teal
  primary: {
    100: '#B2DFDB',
    300: '#4DB6AC',
    500: '#009688',
    700: '#00796B',
    900: '#004D40',
  },

  // Blue
  secondary: {
    100: '#BBDEFB',
    300: '#64B5F6',
    500: '#2196F3',
    700: '#1976D2',
    900: '#0D47A1',
  },

  // Grey
  grey: {
    100: '#F5F5F5',
    200: '#EEEEEE',
    300: '#E0E0E0',
    400: '#BDBDBD',
    500: '#9E9E9E',
    600: '#757575',
    700: '#616161',
    800: '#424242',
    900: '#212121',
  },

  // Red
  error: {
    500: '#F44336',
  },
};

// Gradients
color.gradient = {
  primary: `linear-gradient(0deg, ${color.primary[900]} 0%, ${color.primary[500]} 100%)`,
};

// Units
const unit = {
  0: '0',
  1: '8px',
  2: '16px',
  3: '24px',
  4: '32px',
  5: '40px',
  6: '48px',
  7: '72px',
  8: '80px',
  9: '108px',
  10: '144px',
};

// Breakpoints
const breakpoint = {
  xs: '480px',
  sm: '768px',
  md: '992px',
  lg: '1200px',
  xl: '1400px',
};

// Heights
const height = {
  header: {
    mobile: '56px',
    desktop: '72px',
  },
};

// Width
const width = {
  ...breakpoint,
  max: '1440px',
  nav: {
    mobile: '300px',
  },
};

// Z-Indexes
const z = {
  modal: 500,
  modalOverlay: 490,
  nav: 300,
  header: 100,
  navOverlay: 90,
  base: 1,
  bottom: -1,
};

// Timings
const duration = {
  fast: '200ms',
  normal: '400ms',
  slow: '800ms',
};

// Font Stacks
const font = {
  sans: '"Open Sans", Arial, "Helvetica Neue", Helvetica, sans-serif',
  serif: 'Georgia, Times, "Times New Roman", serif',
  mono:
    '"Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace',
};

module.exports = {
  color,
  unit,
  height,
  width,
  breakpoint,
  z,
  duration,
  font,
};
