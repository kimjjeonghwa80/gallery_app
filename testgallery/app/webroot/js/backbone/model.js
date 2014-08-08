var Album = Album || {};
Album.Gallery = Album.Gallery || {};
Album.Gallery.model = (function(){
    return{
        createAlbumModel:Backbone.Model.extend({
            initialize:function(){
                this.url ='albums/addAlbum/';
            },
            url:this.url
        }),
        userLoginModel : Backbone.Model.extend({
            initialize:function(){
                this.url = 'albums/userLogin/'
            },
            url:this.url
        }),
        addPhotoModel : Backbone.Model.extend({
            initialize:function(){
                this.url = 'albums/addPhoto/'
            },
            url:this.url
        }),
        listAlbumModel : Backbone.Model.extend({
            initialize:function(userId){
                this.url = 'albums/listAlbum/'+userId
            },
            url:this.url
        }),
        listPhotoModel : Backbone.Model.extend({
            initialize:function(albumId){
                this.url = 'albums/listPhoto/'+albumId
            },
            url:this.url
        }),
        deletePhotoModel : Backbone.Model.extend({
            initialize:function(photoId){
                this.url = 'albums/deletePhoto/'+photoId
            },
            url:this.url
        }),
        editAlbumNameModel : Backbone.Model.extend({
            initialize:function(albumId){
                this.url = 'albums/editAlbumName/'+albumId
            },
            url:this.url
        })
    };
})();