<?php return [

// no images

'h1 1/jumbo' => [
  'areas' => [  ['J', '1/1/2/5', ['hl<' => 40]],
]],

'h2 1:3' => [
  'areas' => [  ['Hs', '1/2/1/5'],
                ['h', '1/1', ['hl>=' => 30]],
]],

'h2 2:2' => [
  'areas' => [  ['Hs', '1/1/1/3'],
                ['Hs', '1/3/1/5'],
]],

'h3 3:1/a' => [
  'areas' => [  ['Hs', '1/1/1/4', ['hl>=' => 15]],
                [['h', 'h'], '1/4'],
]],

'h3 3:1/jumbo' => [
  'promote' => 1,
  'areas' => [  ['J', '1/1/1/4', ['hl<' => 15]],
                [['h', 'h'], '1/4',  ['hl<' => 45]],
]],

'h3 1:1:1' => [],

'h4 1:2:1/a' => [
  'areas' => [  ['Hs', '1/2/1/4', ['hl>=' => 10]],
                [['h', 'h'], '1/4'],
                ['h', '1/1', ['hl>=' => 30]],
]],

// 'h4 1:2:1/jumbo' => [
//   'promote' => 1,
//   'areas' => [  ['J', '1/2/1/4', ['hl<' => 10]],
//                 [['h', 'h'], '1/4'],
//                 ['h', '1/1', ['hl>=' => 30]],
// ]],

'h4 1:1:1:1' => [
  'areas' => [  ['h', '1/1', ['hl>=' => 30]],
                ['h', '1/2'],
                ['h', '1/3'],
                ['h', '1/4'],
]],

'h5 2:1:1/a' => [
  'grid-rows' => 2,
  'areas' => [  ['Hs', '1/1/3/3', ['hl>=' => 10]],
                ['h', '1/3'],
                ['h', '1/4'],
                ['h', '2/3'],
                ['h', '2/4'],
]],

'h5 2:1:1/jumbo' => [
  'promote' => 1,
  'grid-rows' => 2,
  'areas' => [  ['J', '1/1/3/3', ['hl<' => 10]],
                ['h', '1/3'],
                ['h', '1/4'],
                ['h', '2/3'],
                ['h', '2/4'],
]],

'h6 1:3/1:1:1:1' => [],

'h6 2:2/1:1:1:1' => [],


// 1 image

'h2i1 1:3' => [
  'areas' => [  ['FRs', '1/2/2/5'],
                ['h', '1/1/2/2'],
]],

'h2i1 2:2/v' => [
  'promote' => 1,
  'areas' => [  ['FR|', '1/1/2/3', ['iw>=' => 240, 'iv>' => .8, 'iv<=' => 2]],
                ['Hs', '1/3/2/5'],
]],

// 'h3i1 3:1/n' => [
//   'areas' => [  ['FLs', '1/1/2/4', ['iw>=' => 360, 'iv>' => .34, 'iv<=' => .67]],
//                 [['h', 'h'], '1/4'],
// ]],

'h3i1 3:1/w' => [
  'areas' => [  ['Ws', '1/1/2/4', ['iw>=' => 720, 'iv<=' => .34]],
                [['h', 'h'], '1/4'],
]],

'h3i1 1:2:1' => [
  'areas' => [  ['Hs', '1/2/2/4'],
                ['t', '1/4'],
                ['h', '1/1', ['hl>=' => 30]],
]],

// 'h3i1 1:1:2/b' => [
//   'areas' => [  ['fl', '1/3/2/5', ['iv>' => .34, 'iv<=' => .67]],
//                 ['h', '1/1', ['hl>=' => 30]],
//                 ['h', '1/2'],
// ]],

'h3i1 1:3/wide' => [
  'areas' => [  ['Ws', '1/2/2/5', ['iw>=' => 720, 'iv<=' => .34]],
                [['h', 'h'], '1/1'],
]],

'h4i1 2:1:1/a' => [
  'areas' => [  ['Hs', '1/1/2/3'],
                ['t', '1/4'],
                [['h', 'h'], '1/3', ['hl<' => 20]],
]],

'h4i1 2:1:1/b' => [
  'areas' => [  ['Hs', '1/1/2/3'],
                ['t', '1/3'],
                [['h', 'h'], '1/4', ['hl<' => 20]],
]],

'h4i1 1:2:1/c' => [
  'areas' => [  ['Hs', '1/2/2/4'],
                ['t', '1/1'],
                [['h', 'h'], '1/4'],
]],

'h5i1 2:2/1:1:2' => [],

'h7i1 1:2:1/1:1:1:1' => [],

'h7i1 1:1:1:1' => [
  'areas' => [  ['t', '1/3'],
                [['h', 'h'], '1/1'],
                [['h', 'h'], '1/2'],
                [['h', 'h'], '1/4'],
]],

'h7i1 1:3/1:1:1:1' => [],


// 2 images

// 'h2i2 1:3' => [
//   'areas' => [  ['FRs', '1 / 2 / 2 / span 3'],
//                 ['t', '1/1'],
// ]],

// 'h2i2 2:2/Fl' => [
//   'areas' => [  ['FL', '1/1/2/3', ['iw>=' => 360, 'iv>' => .34, 'iv<=' => 1]],
//                 ['FL', '1/3/2/5', ['iw>=' => 360, 'iv>' => .34, 'iv<=' => 1]],
// ]],

'h2i2 2:2/W1' => [
  'areas' => [  ['W', '1/1/2/3', ['iw>=' => 720, 'iv<=' => .67]],
                ['W', '1/3/2/5', ['iw>=' => 720, 'iv<=' => .67]],
]],

'h2i2 2:2/W2' => [
  'areas' => [  ['W', '1/1/2/3', ['iw>=' => 720, 'iv>' => .8, 'iv<=' => 2]],
                ['W', '1/3/2/5', ['iw>=' => 720, 'iv>' => .8, 'iv<=' => 2]],
]],

'h2i2 2:2/vv' => [
  'promote' => 1,
  'areas' => [  ['FRs|', '1/1/2/3', ['iw>=' => 240, 'iv>' => .8, 'iv<=' => 2]],
                ['FRs', '1/3/2/5', ['iw>=' => 240, 'iv>' => .8, 'iv<=' => 2]],
]],

'h2i2 2:2/vh' => [
  'promote' => 1,
  'areas' => [  ['FRs|', '1/1/2/3', ['iw>=' => 240, 'iv>' => .8, 'iv<=' => 2]],
                ['W', '1/3/2/5', ['iw>=' => 240, 'iv<=' => .5]],
]],

'h3i2 2:1:1/a' => [
  'areas' => [  ['Hs', '1/1/2/3'],
                ['t', '1/3/2/4'],
                ['t', '1/4/2/5'],
]],

'h3i2 1:1:2/b' => [
  'areas' => [  ['Hs', '1/3/2/5', ['hl>=' => 15]],
                ['t', '1/1/2/2'],
                ['t', '1/2/2/3'],
]],

'h3i2 1:1:2/jumbo' => [
  'areas' => [  ['J', '1/3/2/5', ['hl<' => 15]],
                ['t', '1/1/2/2'],
                ['t', '1/2/2/3'],
]],

'h5i3 1:1:2/v' => [
  'grid-rows' => 2,
  'areas' => [  ['FRs', '1/3/3/5', ['iw>=' => 360, 'iv>' => 1, 'iv<=' => 2]],
                ['t', '1/1'],
                ['t', '1/2'],
                ['h', '2/1', ['hl<' => 45]],
                ['h', '2/2', ['hl<' => 45]],
]],

'h5i2 1:2:1' => [
  'grid-rows' => 2,
  'areas' => [  ['W', '1/2/3/4', ['iw>=' => 720, 'iv>' => .34, 'iv<=' => .67]],
                ['w', '1/4', ['iw>=' => 360, 'iv<=' => .67]],
                ['h', '2/4'],
                [['h', 'h'], '1/1'],
]],

'h5i2 2:1:1' => [
  'grid-rows' => 2,
  'areas' => [  ['W', '1/1/3/3', ['iw>=' => 720, 'iv>' => .34, 'iv<=' => .67]],
                ['w', '1/3', ['iw>=' => 360, 'iv<=' => 1]],
                [['h', 'h', 'h'], '1/4'],
]],

'h6i2 2:1:1/v' => [
  'areas' => [  ['FRs|', '1/1/2/3', ['iw>=' => 240, 'iv>' => .8, 'iv<=' => 2]],
                [['t', 'h'], '1/3/2/4'],
                [['h', 'h', 'h'], '1/4/2/5'],
]],


// 3 images

'h5i3 2:1:1/a' => [
  'grid-rows' => 2,
  'areas' => [  ['Ws', '1/1/3/3', ['iw>=' => 720, 'iv<=' => .67]],
                ['w', '1/3', ['iw>=' => 360, 'iv<=' => 1, 'hl<' => 90]],
                ['w', '1/4', ['iw>=' => 360, 'iv<=' => 1, 'hl<' => 90]],
                ['h', '2/3', ['hl<' => 90]],
                ['h', '2/4', ['hl<' => 90]],
]],

// 'h5i3 2:1:1/b' => [ // not in Figma
//   'grid-rows' => 2,
//   'areas' => [  ['Ws', '1/2/3/4', ['iw>=' => 720, 'iv<=' => .67]],
//                 [['w', 'h'], '1/1', ['iw>=' => 360, 'iv<=' => 1, 'hl<' => 90]],
//                 [['w', 'h'], '1/4', ['iw>=' => 360, 'iv<=' => 1, 'hl<' => 90]],
// ]],

// 'h5i3 1:2:1' => [
//   'grid-rows' => 2,
//   'areas' => [  ['W', '1/2/3/4', ['iw>=' => 720, 'iv>' => .5, 'iv<=' => 1]],
//                 ['w', '1/1', ['iw>=' => 360, 'iv<=' => .67]],
//                 [['t', 'h'], '1/4/3/5'],
//                 ['h', '2/1'],
// ]],

// 'h7i3 2:1:1/a' => [
//   'grid-rows' => 3,
//   'areas' => [  ['Ws', '1/1/4/3', ['iw>=' => 720, 'iv<=' => .67]],
//                 ['w', '1/3', ['iw>=' => 360, 'iv<=' => 1]],
//                 ['w', '1/4', ['iw>=' => 360, 'iv<=' => 1]],
//                 ['h', '2/3'],
//                 ['h', '2/4'],
//                 ['h', '3/3'],
//                 ['h', '3/4'],
// ]],

// 'h7i3 2:1:1/b' => [
//   'grid-rows' => 3,
//   'areas' => [  ['W', '1/1/4/3', ['iw>=' => 720, 'iv>' => .67, 'iv<=' => 1]],
//                 ['w', '1/3', ['iw>=' => 360, 'iv<=' => 1]],
//                 ['w', '1/4', ['iw>=' => 360, 'iv<=' => 1]],
//                 ['h', '2/3'],
//                 ['h', '2/4'],
//                 ['h', '3/3'],
//                 ['h', '3/4'],
// ]],


]; ?>