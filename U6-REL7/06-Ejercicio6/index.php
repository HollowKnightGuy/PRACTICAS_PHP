<?php

    require('fpdf.php');

    //PRUEBA DE TEXTO E IMAGEN

    class PDF extends FPDF
        {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('logo.png',10,8,20);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->Cell(50,10,'Titulo de mi pdf',1,0,'C');
            // Salto de línea
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }


        //PRUEBA DE TABLA

        // Cargar los datos
        function LoadData($file)
        {
            // Leer las líneas del fichero
            $lines = file($file);
            $data = array();
            foreach($lines as $line)
                $data[] = explode(';',trim($line));
            return $data;
        }

        // Tabla coloreada
        function FancyTable($header, $data)
        {
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(255,0,0);
            $this->SetTextColor(255);
            $this->SetDrawColor(128,0,0);
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            // Cabecera
            $w = array(40, 35, 45, 40);
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
            $this->Ln();
            // Restauración de colores y fuentes
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Datos
            $fill = false;
            foreach($data as $row)
            {
                $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
                $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
                $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
                $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
                $this->Ln();
                $fill = !$fill;
            }
            // Línea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }


        //BRISCA
 

        function mostrarCartas(){

            $baraja=[];
            $nombres=['oros_','bastos_','espadas_','copas_'];
    
            for($i=0;$i<4;$i++){
                for($j=1;$j<13;$j++){
                    array_push($baraja,$nombres[$i]."$j");
                }
            }

            shuffle($baraja);

            $jugador1=[];
            for($i=0;$i<3;$i++){
                array_push($jugador1,array_pop($baraja));
            }
    
       
            for($i=0;$i<count($jugador1);$i++){
                $this->Image('imagenes/'.$jugador1[$i].'.jpg',10);
            }
        }
    
}


    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);
    for($i=1;$i<=5;$i++)
        $pdf->Cell(0,10,'Imprimiendo linea numero '.$i,0,1);
    // Títulos de las columnas
    $header = array('Pais', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
    // Carga de datos

    $data = $pdf->LoadData('paises.txt');
    $pdf->SetFont('Arial','',14);
    $pdf->FancyTable($header,$data);

    //para la brisca
    $pdf->mostrarCartas();
    $pdf->Output();

?>