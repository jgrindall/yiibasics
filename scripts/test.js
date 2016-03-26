var init = function(){
  var PostModel = Backbone.Model.extend({
    urlRoot:'/bbtest/index.php/post',
    defaults:{
      "content":"contents.... etc..."
    }
  });
  var PostsCollection = Backbone.Collection.extend({
    url:'/bbtest/index.php/post',
    model:PostModel
  });
  var add = function(){
    var data = {"content":"testing!! " + Math.floor(Math.random()*10000)};
    coll.create(data);
  };
  var remove = function(){
    if(coll.length >= 1){
      var model = coll.at(coll.length - 1);
      model.destroy();
    }
  };
  var update = function(){
    alert("u");
    if(coll.length >= 1){
      var model = coll.at(0);
      var c = model.get("content");
      model.set("content", c + "new");
      model.save();
    }
  };

  var redraw = function(){
    var names = coll.pluck("content");
    console.log(names);
    if(names){
      var ul = $("ul");
      ul.empty();
      _.each(names, function(c){
        ul.append("<li>" + c + "</li>")
      });
    }
  };

  $("#add").click(add);
  $("#remove").click(remove);
  $("#update").click(update);

  var coll = new PostsCollection();

  coll.on("change add remove reset", redraw);
  coll.fetch();





};
$(document).ready(init);
