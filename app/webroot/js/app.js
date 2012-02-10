var __slice = Array.prototype.slice;

window.arcs = {};

arcs.views = {};

arcs.models = {};

arcs.collections = {};

arcs.events = {};

arcs.utils = {};

arcs.debug = true;

arcs.version = "0.8.0";

arcs.baseURL = '/';

arcs.log = function() {
  var msg;
  msg = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
  if (arcs.debug && ((typeof console !== "undefined" && console !== null ? console.log : void 0) != null)) {
    return console.log.apply(console, ['[ARCS]:'].concat(__slice.call(msg)));
  }
};

_.extend(arcs, Backbone.Events);
