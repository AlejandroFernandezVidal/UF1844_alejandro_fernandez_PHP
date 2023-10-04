<html>
<head>
    <!--Alejandro Fernández Vidal-->
    <title>PHP Dia5 - Bastidor</title>
</head>
<body>
    <h1>Práctica Extra - Bastidor Europeo</h1>

    <?php 
    ini_set("display_errors", 1);//Força que el servidor mostri el errors
    
    class Bastidor{
        private $numeroBastidor="";

        private static $arrayYear=array("Y"=>2000,"A"=>2010,"L"=>2020,"1"=>2001,"B"=>2011,"M"=>2021,"2"=>2002,"C"=>2012,"N"=>2022,"3"=>2003,"D"=>2013,
        "P"=>2023,"R"=>1994,"4"=>2004,"E"=>2014,"S"=>1995,"5"=>2005,"F"=>2015,"T"=>1996,"6"=>2006,"G"=>2016,"V"=>1997,"7"=>2007,
        "H"=>2017,"W"=>1998,"8"=>2008,"J"=>2018,"X"=>1999,"9"=>2009,"K"=>2019);//Creamos array static para que una única vez se cree el array y sea una clase independiente del array

        private static $arrayRegion=array("S"=>"Europa","T"=>"Europa","U"=>"Europa","V"=>"Europa","W"=>"Europa","X"=>"Europa",
        "Y"=>"Europa","Z"=>"Europa");

        private static $arrayMarca=array("SAD"=>"Jaguar (F-Pace)","SAL"=>"Land Rover","SAJ"=>"Jaguar","SAR"=>"Rover","SB1"=>"Toyota","SBM"=>"McLaren","SCA"=>"Rolls Royce","SCB"=>"Bentley","SCC"=>"Lotus Cars",
        "SCE"=>"DeLorean Motor Cars N. Ireland","SCF"=>"Aston","SDB"=>"Peugeot (formerly Talbot)","SED"=>"General Motors Luton Plant","SEY"=>"LDV","SFA"=>"Ford","SFD"=>"Alexander Dennis","SHH"=>"Honda","SHS"=>"Honda",
        "SJN"=>"Nissan","SKF"=>"Vauxhall","SLP"=>"JCB Research","SMT"=>"Triumph Motorcycles","SUF"=>"Fiat Auto","SUL"=>"FSC","SUP"=>"FSO-Daewoo","SUU"=>"Solaris Bus & Coach","SWV"=>"TA-NO","TCC"=>"Micro Compact Car AG (smart 1998-1999)",
        "TDM"=>"QUANTYA Swiss Electric Movement","TK9"=>"SOR buses","TMA"=>"Hyundai Motor Manufacturing","TMB"=>"Škoda","TMK"=>"Karosa","TMP"=>"Škoda trolleybuses","TMT"=>"Tatra","TM9"=>"Škoda trolleybuses",
        "TNE"=>"TAZ","TN9"=>"Karosa","TRA"=>"Ikarus Bus","TRU"=>"Audi","TSE"=>"Ikarus Egyedi Autobuszgyar","TSM"=>"Suzuki","TW1"=>"Toyota Caetano","TYA"=>"Mitsubishi Trucks","TYB"=>"Mitsubishi Trucks","UU1"=>"Renault Dacia",
        "UU3"=>"ARO","UU6"=>"Daewoo","U5Y"=>"Kia Motors","U6Y"=>"Kia Motors","VAG"=>"Magna Steyr Puch","VAN"=>"MAN","VBK"=>"KTM (Motorcycles)","VF1"=>"Renault","VF2"=>"Renault","VF3"=>"Peugeot","VF4"=>"Talbot","VF6"=>"Renault (Trucks & Buses)",
        "VF7"=>"Citroën","VF8"=>"Matra","VF9"=>"Bugatti","795"=>"Bugatti","VG5"=>"MBK (motorcycles)","VLU"=>"Scania","VN1"=>"SOVAB","VNE"=>"Irisbus","VNK"=>"Toyota","VNV"=>"Renault-Nissan","VSA"=>"Mercedes-Benz","VSE"=>"Suzuki (Santana Motors)",
        "VSK"=>"Nissan","VSS"=>"SEAT","VSX"=>"Opel","VS6"=>"Ford","VS7"=>"Citroën","VS9"=>"Carrocerias Ayats","VTH"=>"Derbi (motorcycles)","VTL"=>"Yamaha (motorcycles)","VTT"=>"Suzuki (motorcycles)","VV9"=>"TAURO","VWA"=>"Nissan",
        "VWV"=>"Volkswagen","VX1"=>"Zastava / Yugo Serbia","WAG"=>"Neoplan","WAU"=>"Audi","WA1"=>"Audi SUV","WBA"=>"BMW","WBS"=>"BMW M","WBW"=>"BMW","WBY"=>"BMW","WDA"=>"Daimler","WDB"=>"Mercedes-Benz","WDC"=>"DaimlerChrysler",
        "WDD"=>"Mercedes-Benz","WDF"=>"Mercedes-Benz (commercial vehicles)","WEB"=>"Evobus GmbH (Mercedes-Bus)","WJM"=>"Iveco Magirus","WF0"=>"Ford","WKE"=>"Fahrzeugwerk Bernard Krone GmbH & Co. KG","WKK"=>"Kässbohrer/Setra",
        "WMA"=>"MAN","WME"=>"smart","WMW"=>"MINI","WMX"=>"Mercedes-AMG","WP0"=>"Porsche","WP1"=>"Porsche SUV","W09"=>"RUF","W0L"=>"Opel","W0V"=>"Opel","WUA"=>"quattro GmbH","WVG"=>"Volkswagen MPV/SUV","WVW"=>"Volkswagen",
        "WV1"=>"Volkswagen Commercial Vehicles","WV2"=>"Volkswagen Bus/Van","WV3"=>"Volkswagen Trucks","XLB"=>"Volvo (NedCar)","XLE"=>"Scania","XLR"=>"DAF (trucks)","XL9"=>"Spyker","363"=>"Spyker","XMC"=>"Mitsubishi (NedCar)",
        "XTA"=>"Lada/AvtoVAZ","XTC"=>"KAMAZ","XTH"=>"GAZ","XTT"=>"UAZ/Sollers","XTY"=>"LiAZ","XUF"=>"General Motors","XUU"=>"AvtoTor (General Motors SKD)","XW8"=>"Volkswagen Group","XWB"=>"UZ-Daewoo","XWE"=>"AvtoTor (Hyundai-Kia SKD)",
        "X1M"=>"PAZ","X4X"=>"AvtoTor (BMW SKD)","X7L"=>"Renault AvtoFramos","X7M"=>"Hyundai TagAZ","YBW"=>"Volkswagen","YB1"=>"Volvo Trucks","YCM"=>"Mazda","YE2"=>"Van Hool (buses)","YH2"=>"BRP (Lynx snowmobiles)","YK1"=>"Saab-Valmet",
        "YS2"=>"Scania AB","YS3"=>"Saab","YS4"=>"Scania Bus","YTN"=>"Saab NEVS","YT9"=>"Koenigsegg","007"=>"Koenigsegg","034"=>"Carvia","YU7"=>"Husaberg (motorcycles)","YV1"=>"Volvo Cars","YV4"=>"Volvo Cars","YV2"=>"Volvo Trucks",
        "YV3"=>"Volvo Buses","Y3M"=>"MAZ","Y6D"=>"Zaporozhets/AvtoZAZ","ZAA"=>"Autobianchi","ZAM"=>"Maserati","ZAP"=>"Piaggio/Vespa/Gilera","ZAR"=>"Alfa Romeo","ZBN"=>"Benelli","ZCG"=>"Cagiva SpA / MV Agusta","ZCF"=>"Iveco",
        "ZDM"=>"Ducati Motor Holdings SpA","ZDF"=>"Ferrari Dino","ZD0"=>"Yamaha","ZD3"=>"Beta Motor","ZD4"=>"Aprilia","ZFA"=>"Fiat","ZFC"=>"Fiat V.I.","ZFF"=>"Ferrari","ZGU"=>"Moto Guzzi","ZHW"=>"Lamborghini","ZJM"=>"Malaguti",
        "ZJN"=>"Innocenti","ZKH"=>"Husqvarna Motorcycles","ZLA"=>"Lancia","ZOM"=>"OM");

        private static $arrayPais=array("Z5"=>"Lituania","Z4"=>"Lituania","Z3"=>"Lituania","Z2"=>"Eslovenia","Z1"=>"Eslovenia","ZZ"=>"Eslovenia","ZY"=>"Eslovenia","ZX"=>"Eslovenia","ZR"=>"Italia","ZP"=>"Italia","ZN"=>"Italia",
        "ZM"=>"Italia","ZL"=>"Italia","ZK"=>"Italia","ZJ"=>"Italia","ZH"=>"Italia","ZG"=>"Italia","ZF"=>"Italia","ZE"=>"Italia","ZD"=>"Italia","ZC"=>"Italia","ZB"=>"Italia","ZA"=>"Italia","Y0"=>"Ucrania","Y9"=>"Ucrania",
        "Y8"=>"Ucrania","Y7"=>"Ucrania","Y6"=>"Ucrania","Y5"=>"Bielorrusia","Y4"=>"Bielorrusia","Y3"=>"Bielorrusia","Y2"=>"Noruega","Y1"=>"Noruega","YZ"=>"Noruega","YY"=>"Noruega","YX"=>"Noruega","YW"=>"Suecia",
        "YV"=>"Suecia","YU"=>"Suecia","YT"=>"Suecia","YS"=>"Suecia","YR"=>"Malta","YP"=>"Malta","YN"=>"Malta","YM"=>"Malta","YL"=>"Malta","YK"=>"Finlandia","YJ"=>"Finlandia","YH"=>"Finlandia","YG"=>"Finlandia",
        "YF"=>"Finlandia","YE"=>"Bélgica","YD"=>"Bélgica","YC"=>"Bélgica","YB"=>"Bélgica","YA"=>"Bélgica","X2"=>"Luxemburgo","X1"=>"Luxemburgo","XZ"=>"Luxemburgo","XY"=>"Luxemburgo","XX"=>"Luxemburgo",
        "X0"=>"Rusia","X9"=>"Rusia","X8"=>"Rusia","X7"=>"Rusia","X6"=>"Rusia","X5"=>"Rusia","X4"=>"Rusia","X3"=>"Rusia","XW"=>"Rusia","XV"=>"Rusia","XU"=>"Rusia","XT"=>"Rusia","XS"=>"Rusia","XR"=>"Países Bajos",
        "XP"=>"Países Bajos","XN"=>"Países Bajos","XM"=>"Países Bajos","XL"=>"Países Bajos","XK"=>"Grecia","XJ"=>"Grecia","XH"=>"Grecia","XG"=>"Grecia","XF"=>"Grecia","XE"=>"Bulgaria","XD"=>"Bulgaria","XC"=>"Bulgaria",
        "XB"=>"Bulgaria","XA"=>"Bulgaria","V0"=>"Estonia","V9"=>"Estonia","V8"=>"Estonia","V7"=>"Estonia","V6"=>"Estonia","V5"=>"Croacia","V4"=>"Croacia","V3"=>"Croacia","V2"=>"Serbia","V1"=>"Serbia","VZ"=>"Serbia",
        "VY"=>"Serbia","VX"=>"Serbia","VW"=>"España","VV"=>"España","VU"=>"España","VT"=>"España","VS"=>"España","VR"=>"Francia","VP"=>"Francia","VN"=>"Francia","VM"=>"Francia","VL"=>"Francia","VK"=>"Francia","VJ"=>"Francia",
        "VH"=>"Francia","VG"=>"Francia","VF"=>"Francia","VE"=>"Austria","VD"=>"Austria","VC"=>"Austria","VB"=>"Austria","VA"=>"Austria","U7"=>"Eslovaquia","U6"=>"Eslovaquia","U5"=>"Eslovaquia","UZ"=>"Rumania","UY"=>"Rumania",
        "UX"=>"Rumania","UW"=>"Rumania","UV"=>"Rumania","UU"=>"Rumania","UT"=>"Irlanda","US"=>"Irlanda","UR"=>"Irlanda","UP"=>"Irlanda","UN"=>"Irlanda","UM"=>"Dinamarca","UL"=>"Dinamarca","UK"=>"Dinamarca","UJ"=>"Dinamarca","UH"=>"Dinamarca",
        "T1"=>"Portugal","TZ"=>"Portugal","TY"=>"Portugal","TX"=>"Portugal","TW"=>"Portugal","TV"=>"Hungría","TU"=>"Hungría","TT"=>"Hungría","TS"=>"Hungría","TR"=>"Hungría","TP"=>"República Checa","TN"=>"República Checa","TM"=>"República Checa",
        "TL"=>"República Checa","TK"=>"República Checa","TJ"=>"República Checa","TH"=>"Suiza","TG"=>"Suiza","TF"=>"Suiza","TE"=>"Suiza","TD"=>"Suiza","TC"=>"Suiza","TB"=>"Suiza","TA"=>"Suiza","S4"=>"Latvia","S3"=>"Latvia","S2"=>"Latvia","S1"=>"Latvia",
        "SZ"=>"Polonia","SY"=>"Polonia","SX"=>"Polonia","SW"=>"Polonia","SV"=>"Polonia","SU"=>"Polonia","W0"=>"Alemania","W9"=>"Alemania","W8"=>"Alemania","W7"=>"Alemania","W6"=>"Alemania","W5"=>"Alemania","W4"=>"Alemania","W3"=>"Alemania","W2"=>"Alemania",
        "W1"=>"Alemania","WZ"=>"Alemania","WY"=>"Alemania","WX"=>"Alemania","WW"=>"Alemania","WV"=>"Alemania","WU"=>"Alemania","WT"=>"Alemania","WS"=>"Alemania","WR"=>"Alemania","WP"=>"Alemania","WN"=>"Alemania","WM"=>"Alemania",
        "WL"=>"Alemania","WK"=>"Alemania","WJ"=>"Alemania","WH"=>"Alemania","WG"=>"Alemania","WF"=>"Alemania","WE"=>"Alemania","WD"=>"Alemania","WC"=>"Alemania","WB"=>"Alemania","WA"=>"Alemania","ST"=>"Alemania","SS"=>"Alemania","SR"=>"Alemania",
        "SP"=>"Alemania","SN"=>"Alemania","SM"=>"Reino Unido","SL"=>"Reino Unido","SK"=>"Reino Unido","SJ"=>"Reino Unido","SH"=>"Reino Unido","SG"=>"Reino Unido",
        "SF"=>"Reino Unido","SE"=>"Reino Unido","SD"=>"Reino Unido","SC"=>"Reino Unido","SB"=>"Reino Unido","SA"=>"Reino Unido");


        public function __construct($numeroBastidor){
            $this->numeroBastidor = $numeroBastidor;
            $this->arrayBastidor = str_split($numeroBastidor);
        }

        public function getBastidor(){
            return $this->numeroBastidor;
        }

        public function getRegion(){
            $region="";
            foreach($this::$arrayRegion as $k=>$v){
                if($this->arrayBastidor[0] == $k){
                    $region=$v;
                    break;
                }
            }
            return "Region : ".$region;
        }
        
        public function getPais(){
            $pais=substr($this->numeroBastidor,0,2);
            $paisEncontrado="";
            foreach($this::$arrayPais as $k=>$v){
                if($pais == $k){
                    $paisEncontrado=$v;
                    break;
                }
            }
            return "Pais : ".$paisEncontrado;
        }

        public function getMarca(){
            $fabricante=substr($this->numeroBastidor,0,3);
            $fabricanteEncontrado="";
            foreach($this::$arrayMarca as $k=>$v){
                if($fabricante == $k){
                    $fabricanteEncontrado=$v;
                    break;
                }
            }
            return "Fabricante : ".$fabricanteEncontrado;

        }

        public function getCaracteristicas(){
            return "Serie fabricante : ".substr($this->numeroBastidor,3,6);
            //return "Serie fabricante : ".$this->arrayBastidor[3].$this->arrayBastidor[4].$this->arrayBastidor[5].$this->arrayBastidor[6].$this->arrayBastidor[7].$this->arrayBastidor[8];
        }
        
        public function getYear(){
            $year=0;
            foreach($this::$arrayYear as $k=>$v){
                if($this->arrayBastidor[9] == $k){
                    $year=$v;
                    break;
                }
            }
            return "Año : ".$year;
        }
        public function getPlantaFabricacion(){
            return "Planta de fabricación : ".substr($this->numeroBastidor,10,1);
            //return "Planta de fabricación : ".$this->arrayBastidor[10];
        }
        public function getSerailNumber(){
            return "Serial number : ".substr($this->numeroBastidor,11,6);
            //return "Serial number : ".$this->arrayBastidor[11].$this->arrayBastidor[12].$this->arrayBastidor[13].$this->arrayBastidor[14].$this->arrayBastidor[15].$this->arrayBastidor[16];
        }
    }

    $bastidor = new Bastidor("VSSZZZ1MZ2R040807");
    echo $bastidor->getBastidor()."<br><br>";
    echo $bastidor->getRegion()."<br>";
    echo $bastidor->getPais()."<br>";
    echo $bastidor->getMarca()."<br>";
    echo $bastidor->getCaracteristicas()."<br>";
    echo $bastidor->getYear()."<br>";
    echo $bastidor->getPlantaFabricacion()."<br>";
    echo $bastidor->getSerailNumber()."<br>";

    echo "<br><br><br>";

    $bastidor1 = new Bastidor("SAJWA0HC3B7856233");
    echo $bastidor1->getBastidor()."<br><br>";
    echo $bastidor1->getRegion()."<br>";
    echo $bastidor1->getPais()."<br>";
    echo $bastidor1->getMarca()."<br>";
    echo $bastidor1->getCaracteristicas()."<br>";
    echo $bastidor1->getYear()."<br>";
    echo $bastidor1->getPlantaFabricacion()."<br>";
    echo $bastidor1->getSerailNumber()."<br>";

    echo "<br><br><br>";

    $bastidor2 = new Bastidor("WAUAA24B9X2417735");
    echo $bastidor2->getBastidor()."<br><br>";
    echo $bastidor2->getRegion()."<br>";
    echo $bastidor2->getPais()."<br>";
    echo $bastidor2->getMarca()."<br>";
    echo $bastidor2->getCaracteristicas()."<br>";
    echo $bastidor2->getYear()."<br>";
    echo $bastidor2->getPlantaFabricacion()."<br>";
    echo $bastidor2->getSerailNumber()."<br>";

    ?>
</body>
</html>