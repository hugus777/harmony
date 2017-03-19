<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head >
<LINK REL="stylesheet" TYPE="text/css" HREF="/bitu/bitu.css" TITLE="bitu">
<TITLE>Bitu | Partitions</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META NAME="Author" lang="LA" content="Academicus Sanctae Barbae Ordo">
<META NAME="Copyright" content="&copy; 2002 Academicus Sanctae Barbae Ordo">
</head>

<body>
<p>L'affichage et l'écoute des partitions requiert le <A HREF=http://www.myriad-online.com/cgi-bin/mmplug.pl>Myriad Music Plug-in</A>.</p>
<?php
    //$file = $_SERVER['DOCUMENT_ROOT'].'/partitions/'.$_GET['file'];    Imbécile de Hugus
    $file = $_GET['file'];

    if (file_exists($file)) {
    ?>
<EMBED SRC="<?php echo $file ?>" width=769 height=769 type="application/x-myriad-music" pluginspage="http://www.myriad-online.com/cgi-bin/mmplug.pl"
RATIO=off ANTIALIAS=off LOOK=ocean SING=on SAVE=off DOCINFO=off DISPLAYSIZE=off TITLEHEIGHT=24 TITLEFONTSIZE=20>

<?php
    } else {
?>
<p>Erreur : Le fichier requis est introuvable.</p>
<?php
    }
?>
</body>
</html>