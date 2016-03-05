var init = function(){
  var PinModel = Backbone.Model.extend({
    url:'/pin',
    defaults:{
      "name":"John"
    }
  });
  var PinsCollection = Backbone.Collection.extend({
    url:'/pin',
    model:PinModel
  });

  var options = {
    url:'index.php/main/load',
    dataType:'json'
  };
  $.ajax(options);

  var coll = new PinsCollection();
  //coll.fetch();
};
$(document).ready(init);
