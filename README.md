# Passos de Setup do ficheiro:
</br>
<ol>
<li>Instalar <a href="https://docs.chocolatey.org/en-us/choco/setup">Chocolatey no CMD</a></li>
</br>
<p>A seguir colocar estes comandos:</p>
<ul>
<li>choco install zip</li>
<li>choco install unzip</li>
<li>choco install 7zip</li>
</ul>

</br>
<li>Instalar <a href="https://getcomposer.org/download/">o Composer</a></li>

</br>
<li>Instalar <a href="https://windows.php.net/download#php-8.3">o PHP</a></li>


</br>
<li>Remover o ";" no início destas duas linhas encontradas no ficheiro php.ini.</li>
<ul>
  </br>
<li>;extension=gd.dll</li> 
<li>;extension=zip.dll</li>
</ul>

</br>
<li> Fazer "composer install" na diretoria do Projeto.</li>
</br>
<li> Para iniciar o sistema: "php yii serve"</li>
</ol>
