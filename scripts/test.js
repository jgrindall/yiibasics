var init = function(){
  var PostModel = Backbone.Model.extend({
    url:'/bbtest/index.php/post',
    defaults:{
      "content":"contents.... etc..."
    }
  });
  var PostsCollection = Backbone.Collection.extend({
    url:'/bbtest/index.php/post',
    model:PostModel
  });
  var add = function(){
    var data = {"content":"testing!!"};
    coll.create(data);
  };
  var remove = function(){

  };

  $("#add").click(add);
  $("#remove").click(remove);

  var coll = new PostsCollection();
  coll.fetch();
};
$(document).ready(init);
