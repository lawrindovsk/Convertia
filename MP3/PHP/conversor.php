<?php
namespace MP3\PHP;

require_once('../PHP/DAO/Conexao.php');
require_once('../../../vendor/autoload.php');

use MP3\PHP\DAO\Conexao;
use FFMpeg\FFMpeg;
use FFMpeg\Format\Audio\Mp3;
use FFMpeg\FFProbe;

class Conversor{
  public function converterMp3(string $arquivoUploadExten, string $arquivoUploadName){
    $conex =  new Conexao();

    $ffmpeg = FFMpeg::create([
      'ffmpeg.binaries'  => 'C:\xampp\htdocs\ffmpeg\bin\ffmpeg.exe',
      'ffprobe.binaries' => 'C:\xampp\htdocs\ffmpeg\bin\ffprobe.exe',
      'timeout'          => 3600,
      'ffmpeg.threads'   => 12,
    ]);
    $ffprobe = FFProbe::create([
      'ffmpeg.binaries' => 'C:\xampp\htdocs\ffmpeg\bin\ffmpeg.exe',
      'ffprobe.binaries' => 'C:\xampp\htdocs\ffmpeg\bin\ffprobe.exe',
  ]);

    if(mime_content_type($arquivoUploadExten) != "video/mp4"){
      echo '<script type="text/javascript">
      window.onload = function () { window.location.href; alert("Ô mula! Insira um arquivo válido!"); } 
      </script>';
    }
    else{
      $nomeDoArquivo = explode(".",$arquivoUploadName);
      $videoName = $nomeDoArquivo[0];

      chdir('../Screen/Download');
      $video = $ffmpeg->open($videoName.'.mp4');
      $audio_format = new Mp3();
      $video->save($audio_format, $videoName.'.mp3');
      $conex->inserirMidia($videoName, file_get_contents($arquivoFinal));              
    }
  }
}

?>