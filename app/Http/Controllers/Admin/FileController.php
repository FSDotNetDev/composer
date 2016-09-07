<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;

class FileController extends Controller 
{
	public function path() 
	{
		return (is_dir($_GET['path']) ? array('status' => 'true') : array('status' => 'false'));
	}

	public function view() 
	{
		if (is_dir($_GET['path'])) {

			foreach (glob($_GET['path'] . '/*.*') as $key => $value) {
				$file[$key] = $value;
				$pathFile[$key] = pathinfo($file[$key]);
				$name[$key] = iconv('windows-874', 'utf-8', $pathFile[$key]['filename']);
				$type[$key] = $pathFile[$key]["extension"];        		
				$pdf[$key] = $name[$key] . '.' . $type[$key];
			}

			return $pdf;

		} else {

			return array('status' => 'false');

		}   

	}

	public function read() 
	{
		if (is_dir($_GET['path'])) {

			foreach (glob($_GET['path'] . '/*.*') as $key => $value) {
				$file = $value;
			}

			$pathFile = pathinfo($file);
			$name = $pathFile['filename'];
			$type = $pathFile["extension"];
			$pdf = $name . '.' . $type;

			$open = fopen($file, 'r');
			$size = filesize($file);
			$read = fread($open, $size);

			return $read;

		}

	}

	public function convert()
	{
		/*$fp_pdf = fopen($pdf, 'rb');

		$img = new imagick(); // [0] can be used to set page number
		$img->readImageFile($fp_pdf);
		$img->setImageFormat( "jpg" );
		$img->setImageCompression(imagick::COMPRESSION_JPEG); 
		$img->setImageCompressionQuality(90); 

		$img->setResolution(300,300);

		$img->setImageUnits(imagick::RESOLUTION_PIXELSPERINCH);

		$data = $img->getImageBlob(); */
	}
}