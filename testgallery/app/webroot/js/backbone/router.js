var Album = Album || {};
Album.Gallery = Album.Gallery || {};

Album.Gallery.router = (function(){
    return{
        AppRouter:Backbone.Router.extend({
            routes:{
                '':'index',
                'dashboard/:userId':"dashboard",
                'createAlbum/:id':"createAlbum",
                'listAlbums/:userId':"listAlbums",
                'listPhotos/:albumId':'listPhotos',
                'addPhoto/:albumId':"addPhoto",
                'deletePhoto/:photoId':"deletePhoto",
                'editAlbumName/:albumId':"editAlbumName"
            },
            initialize:function(){

            },
            index:function(){
                this.userLoginModel = new Album.Gallery.model.userLoginModel();
                this.userLoginView  = new Album.Gallery.view.userLoginView({
                    userLoginModel  : this.userLoginModel,
                    parent : this,
                    el     : $('#album')
                })
            },
            dashboard:function(userId) {
                this.userDashboard = new Album.Gallery.view.dashboardView({
                    el:$("#album"),
                    userId:userId
                });
            },
            createAlbum:function(userId) {
                this.createAlbumModel = new Album.Gallery.model.createAlbumModel();
                this.cretaeAlbumView = new Album.Gallery.view.createAlbumView({
                    createAlbumModel:this.createAlbumModel,
                    parent:this,
                    userId:userId,
                    el:$("#album")
                })
            },

            listAlbums:function(userId){

                this.listAlbumModel = new Album.Gallery.model.listAlbumModel(userId);
                this.listAlbumView  = new Album.Gallery.view.listAlbumView({
                    listAlbumModel:this.listAlbumModel,
                    parent:this,
                    el:$("#album")
                });
                this.listAlbumModel.fetch();
            },

            listPhotos:function(albumId){
                this.listPhotoModel = new Album.Gallery.model.listPhotoModel(albumId);
                this.listPhotoView = new Album.Gallery.view.listPhotoView({
                    listPhotoModel:this.listPhotoModel,
                    parent:this,
                    el:$('#album')
                });
                this.listPhotoModel.fetch();
            },
            addPhoto:function(albumId){
                this.addPhotoModel = new Album.Gallery.model.addPhotoModel(albumId);
                this.addPhotoView  = new  Album.Gallery.view.addPhotoView({
                    addPhotoModel:this.addPhotoModel,
                    parent:this,
                    albumId:albumId,
                    el:$('#album')
                });
            },
            deletePhoto:function(photoId){
                this.deletePhotoModel = new Album.Gallery.model.deletePhotoModel(photoId);
                this.deletePhotoView = new Album.Gallery.view.deletePhotoView({
                    deletePhotoModel:this.deletePhotoModel,
                    el:$('#album'),
                    parent:this
                });
            },
            editAlbumName:function(albumId){
                this.editAlbumNameModel = new Album.Gallery.model.editAlbumNameModel(albumId);
                this.editAlbumNameView = new Album.Gallery.view.editAlbumNameView({
                    editAlbumNameModel:this.editAlbumNameModel,
                    albumId:albumId,
                    el:$('#album'),
                    parent:this
                });
            }
        })

    };
})();
var app = new Album.Gallery.router.AppRouter();
Backbone.history.start();