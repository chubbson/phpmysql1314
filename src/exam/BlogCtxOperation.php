<?php

class BlogCtxOOperation
{
	public static function GetSplittedString($input, $splitBy) 
	{
		return explode ( $input , $splitBy );
	}

	public static function GetAllBlogFiles()
	{
		$dir    = '/var/www/uploads/';
		$blogFiles = scandir($dir);

		// shift . folder
		array_shift($blogFiles);
		// shift .. folder
		array_shift($blogFiles);

		return blogFiles;
	}

	public static function DrawBlogFiles($blogfiles)
	{
		foreach ($blogfiles as $bf) {

			$blogCtxInfo = GetBlogCtx($bf);

			$user = blogCtxInfo[0];
			$crtDate = blogCtxInfo[1];
			$title = blogCtxInfo[2];
			$ctx = blogCtxInfo[3];

			// Draw something, got user, got creationdate, got title, got context. 
		}
	}

	public static function SaveBlogCtx($creationDate, $user, $title, $context)
	{
			$data = $givenTitle."~".$givenContent;
			$result = file_put_contents ( $filename , $data );

			// do some exception and permission handling. 
	}

	public static function GetBlogCtx($fileName)
	{
			$file = '/var/www/uploads/'.$bf;
			$fi = pathinfo($file);
			$fn = $path_parts['filename'];
			$splittedFn = GetSplittedString($fn, '_');	

			$user = $splittedFn[0];
			$crtDate = $splittedFn[1];

			// do some error exception and permission handling. 
			$fileCtx = $file_get_contents($file, true);

			$splittedFctx = GetSplittedString($fileCtx, '~');
			$title = $splittedFctx[0];
			$ctx = $splittedFctx[1];
			return new array($user, $crtDate, $title, $ctx);
	}

}

?>