# hotspot_map.coffee
# ------------------
class arcs.collections.HotspotMap extends Backbone.Collection

  model: arcs.models.Hotspot

  url: ->
    arcs.baseURL + "resources/hotspots/" + arcs.resource.id
