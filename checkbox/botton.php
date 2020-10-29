<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute; 
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 95px;
  cursor: pointer;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  left: 0; top: 0;
  width: 80px; height: 30px;
  background: #DDDDDD;
  border-radius: 6px;
  transition: background-color .2s;
}
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 30px; height: 30px;
  transition: all .2s;
  border-radius: 6px 0 0 6px;
  background: #8B0000;
  top: 0; left: 0;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background:#34495E; 
}
[type="checkbox"]:checked + label:after {
  background: #39D2B4;
  top: 0; left: 51px;
  border-radius: 0 6px 6px 0;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s;
}

[type="checkbox"]:not(:checked) + label .ui:before {
  font-family: 'FontAwesome';
  content: "\f00d";
  left: 46px;
  margin-top: 3px;
}
[type="checkbox"]:checked + label .ui:after {
  font-family: 'FontAwesome';
  content: "\f00c";
  color: #39D2B4;
  margin-top: 3px;
  left: 12px;
}
[type="checkbox"]:focus + label:before {
  border: 0; outline: 0;
  box-sizing: border-box;
}

/* Basics */





.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
 margin-top: 2em; 
}
.copy a {
 text-decoration: none;
 color: #1ABC9C;
}


</style>

<body>
    
  
       <p>Inactivo\Activo</p>
<p><input type="checkbox" name="numero" value="Activo" id="test1" /><label for="test1">







</body>
</html>