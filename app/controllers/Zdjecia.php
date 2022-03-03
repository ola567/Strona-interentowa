<?php

class Zdjecia extends Controller
{
    private $photomodel;
	public function __construct()
    {
		$this->photomodel = $this->model('Photos');
	}
	
    public function uploadForm()
    {
        $data = [
            'errors' => isset($_SESSION['temp']) ? $_SESSION['temp'] : []
        ];

        Session::flushTemp();
        $this->view('zdjecia', $data);
    }

    public function gallery($page=1)
    {
        $elementsonpage=4;
        $data=[
            "miniatury"=>[],
            "znaki_wodne"=>[],
            "paginacja"=>[],
            "autor"=>[],
            "tytul"=>[],
            "id"=>[],
            "type"=>'',
            "private"=>[]
        ];

        $allImgs = $this->photomodel->getImages();

        foreach($allImgs as $item)
        {
            $filename = $item->filename;
            $data["miniatury"][]='/miniatury/min-'.$filename;
            $data["znaki_wodne"][]='/znaki_wodne/znakwodny-'.$filename;

            $author = $item->author;
            $data["autor"][]= $author;

            $title = $item->title;
            $data["tytul"][]=$title;

            $id = $item->_id;
            $data["id"][] = $id;

            $private = isset($item->private) ? $item->private : false;
            $data['private'][] = $private;
        }

        $numberofallphotos=count($data['miniatury']);
        $data['paginacja']=[
            'elementsonpage'=>$elementsonpage,
            'actualpage'=>$page,
            'numberofallphotos'=>$numberofallphotos,
            'numberofallpages'=>ceil($numberofallphotos/$elementsonpage),
        ];
        $this->view('galeria', $data);
    }

    public function galleryDelete($page=1)
    {
        $elementsonpage=4;
        $data=[
            "miniatury"=>[],
            "znaki_wodne"=>[],
            "paginacja"=>[],
            "autor"=>[],
            "tytul"=>[],
            "id"=>[],
            'type'=>'delete',
        ];

        $allImgs = $this->photomodel->getImages();

        foreach($allImgs as $item)
        {
            if(in_array($item->_id, isset($_SESSION['zaznaczone']) ? $_SESSION['zaznaczone'] : [])) {
                $filename = $item->filename;
                $data["miniatury"][]='/miniatury/min-'.$filename;
                $data["znaki_wodne"][]='/znaki_wodne/znakwodny-'.$filename;

                $author = $item->author;
                $data["autor"][]= $author;

                $title = $item->title;
                $data["tytul"][]=$title;

                $id = $item->_id;
                $data["id"][] = $id;
            }
        }

        $numberofallphotos=count($data['miniatury']);
        $data['paginacja']=[
            'elementsonpage'=>$elementsonpage,
            'actualpage'=>$page,
            'numberofallphotos'=>$numberofallphotos,
            'numberofallpages'=>ceil($numberofallphotos/$elementsonpage),
        ];
        $this->view('galeria', $data);
    }

    public function upload()
    {
        if(isset($_POST) && isset($_FILES['file']))
        {
            $filename= time().$_FILES['file']['name'];
            $tempname=$_FILES['file']['tmp_name'];
            $title=$_POST['tytul'];
            $author=$_POST['autor'];
            $typ=isset($_POST['typ']);
            $private = false;

            if(isset($_SESSION['logged']))
            {
                if($typ=='prywatny')
                {
                    $private = true;
                }
            }

            $extension=pathinfo($filename, PATHINFO_EXTENSION);
            if(!in_array($extension, ['png', 'jpg']))
            {
                Session::addTemp('error_extensions', '<span style="color: orangered; font-size: 15px;">Niewłaściwe rozszerzenie!</span>');
            }
            else if(($_FILES['file']['size']/1024/1024)>1)
            {
                Session::addTemp('error_filesize', '<span style="color: orangered; font-size: 15px;">Za duży plik!</span>');
            }
            else if(in_array($extension, ['png', 'jpg']))
            {
                move_uploaded_file($tempname,IMAGES.$filename);

                if($extension=='png')
                {
                    /*znak wodny*/
                    $image=imagecreatefrompng(IMAGES.$filename);
                    $watermark=$_POST['znakwodny'];
                    $blackcolor = imagecolorallocate($image, 0, 0, 0);
                    imagestring($image,5,15,30,$watermark, $blackcolor);
                    $filewithwater='znakwodny-'.$filename;
                    imagepng($image, ZNAKI_WODNE.$filewithwater);
                    imagedestroy($image);

                    /*miniatura*/
                    $img=imagecreatefrompng(IMAGES.$filename);
                    $width= imagesx($img);
                    $height=imagesy($img);
                    $width_mini = 200;
                    $height_mini = 150;
                    $img_mini = imagecreatetruecolor($width_mini, $height_mini);
                    imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);
                    $minature='min-'.$filename;
                    imagepng($img_mini, MINIATURY.$minature);
                    imagedestroy($img);
                    imagedestroy($img_mini);
                }
                else if($extension=='jpg')
                {
                    /*znak wodny*/
                    $image=imagecreatefromjpeg(IMAGES.$filename);
                    $watermark=$_POST['znakwodny'];
                    $blackcolor = imagecolorallocate($image, 0, 0, 0);
                    imagestring($image,5,15,30,$watermark, $blackcolor);
                    $filewithwater='znakwodny-'.$filename;
                    imagejpeg($image, ZNAKI_WODNE. $filewithwater);
                    imagedestroy($image);

                    /*miniatura*/
                    $img=imagecreatefromjpeg(IMAGES.$filename);
                    $width= imagesx($img);
                    $height=imagesy($img);
                    $width_mini = 200;
                    $height_mini = 150;
                    $img_mini = imagecreatetruecolor($width_mini, $height_mini);
                    imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);
                    $minature='min-'.$filename;
                    imagejpeg($img_mini, MINIATURY.$minature);
                    imagedestroy($img);
                    imagedestroy($img_mini);
                }

                $this->photomodel->saveDataForImages($filename, $title, $author, $private);
                Session::addTemp('success', '<span style="color: orangered; font-size: 15px;">Zapisano!</span>');
            }
        }

        header("Location: ". Resources::route('zdjecia/uploadForm'));
    }

    public function wybranePost()
    {
	    $arrId = $_POST['id'];
	    Session::setCheckbox($arrId);

        header("Location: ". Resources::route('zdjecia/gallery'));
    }

    public function wybraneDeletePost()
    {
	    $arrId = $_POST['id'];
	    Session::removeFromCheckbox($arrId);

        header("Location: ". Resources::route('zdjecia/galleryDelete'));
    }
}
