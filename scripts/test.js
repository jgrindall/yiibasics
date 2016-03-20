var init = function(){
  var PostModel = Backbone.Model.extend({
    url:'/bbtest/index.php/post',
    defaults:{
      "contents":"contents.... etc..."
    }
  });
  var PostsCollection = Backbone.Collection.extend({
    url:'/bbtest/index.php/post',
    model:PostModel
  });

  var coll = new PostsCollection();
  coll.fetch();
};
$(document).ready(init);
