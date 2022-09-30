
@if(strcmp($departamento, 'ti') == 0) 
    echo "Relatório do mes $mes para o departamento de Tecnologia da Informação";
@elseif(strcmp($departamento, 'av') == 0)
    echo "Relatório do mes $mes para o departamento de Áudio e Vídeo";
@else
    echo "Departamento desconhecido";
@endif