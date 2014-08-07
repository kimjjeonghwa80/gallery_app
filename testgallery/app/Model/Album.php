<?php
class Album extends AppModel {

    public $hasMany = array(
        'Photo' => array(
            'className' => 'Photo',
            'foreignKey' => 'album_id'
        )
    );

    public function getAlbum($userId) {

        $sendAlbumList = array();
        $albums = $this->find('all', array('conditions' => array('Album.user_id' => $userId)));
        if(!empty($albums)){
            foreach($albums as $key => $album){
                $albumList[$key]['id'] = $album['Album']['id'];
                $albumList[$key]['name'] = $album['Album']['name'];
                $albumList[$key]['photo'] = 'app/webroot/img/'.$album['Photo']['0']['name'];
            }
            $sendAlbumList['albumList']['albums'] = $albumList;
        } else{
            $sendAlbumList['albumList']['albums'] = array('error' => 'No Images');
        }

        return $sendAlbumList;
    }

    public function addAlbum($post) {
        $data = array('Album' => array('user_id' => $post->user_id,'name' => $post->name));
        $this->create($data);
        if ($this->save()) {
            return array('albumId' => $this->id);
        }
        return array('error' => 'Not saved');
    }

    public function editAlbumName($albumData){
        $this->id = $albumData->albumId;
        if($this->saveField('name',$albumData->albumName)) {
            return array('albumId' => $albumData->albumId);
        }
        return array('error' => 'Not saved');
    }

    public function getAlbumName($albumId){
        $this->id= $albumId;
        $albumName = $this->field('Album.name');
        return $albumName;
    }
}
