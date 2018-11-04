<?php

use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->delete();

        DB::table('pais')->insert([
            ['id'=>'AF','name'=>'Afganistán','c3' => 'AFG'],
            ['id'=>'AL','name'=>'Albania','c3' => 'ALB'],
            ['id'=>'AQ','name'=>'Antártida','c3' => 'ATA'],
            ['id'=>'DZ','name'=>'Argelia','c3' => 'DZA'],
            ['id'=>'AS','name'=>'Samoa Americana','c3' => 'ASM'],
            ['id'=>'AD','name'=>'Andorra','c3' => 'AND'],
            ['id'=>'AO','name'=>'Angola','c3' => 'AGO'],
            ['id'=>'AG','name'=>'Antigua y Barbuda','c3' => 'ATG'],
            ['id'=>'AZ','name'=>'Azerbaiyán','c3' => 'AZE'],
            ['id'=>'AR','name'=>'Argentina','c3' => 'ARG'],
            ['id'=>'AU','name'=>'Australia','c3' => 'AUS'],
            ['id'=>'AT','name'=>'Austria','c3' => 'AUT'],
            ['id'=>'BS','name'=>'Bahamas','c3' => 'BHS'],
            ['id'=>'BH','name'=>'Baréin','c3' => 'BHR'],
            ['id'=>'BD','name'=>'Bangladés','c3' => 'BGD'],
            ['id'=>'AM','name'=>'Armenia','c3' => 'ARM'],
            ['id'=>'BB','name'=>'Barbados','c3' => 'BRB'],
            ['id'=>'BE','name'=>'Bélgica','c3' => 'BEL'],
            ['id'=>'BM','name'=>'Bermudas','c3' => 'BMU'],
            ['id'=>'BT','name'=>'Bután','c3' => 'BTN'],
            ['id'=>'BO','name'=>'Bolivia','c3' => 'BOL'],
            ['id'=>'BA','name'=>'Bosnia y Herzegovina','c3' => 'BIH'],
            ['id'=>'BW','name'=>'Botsuana','c3' => 'BWA'],
            ['id'=>'BV','name'=>'Isla Bouvet','c3' => 'BVT'],
            ['id'=>'BR','name'=>'Brasil','c3' => 'BRA'],
            ['id'=>'BZ','name'=>'Belice','c3' => 'BLZ'],
            ['id'=>'IO','name'=>'Territorio Británico del Océano Índico','c3' => 'IOT'],
            ['id'=>'SB','name'=>'Islas Salomón','c3' => 'SLB'],
            ['id'=>'VG','name'=>'Islas Vírgenes Británicas','c3' => 'VGB'],
            ['id'=>'BN','name'=>'Brunéi','c3' => 'BRN'],
            ['id'=>'BG','name'=>'Bulgaria','c3' => 'BGR'],
            ['id'=>'MM','name'=>'Myanmar','c3' => 'MMR'],
            ['id'=>'BI','name'=>'Burundi','c3' => 'BDI'],
            ['id'=>'BY','name'=>'Bielorrusia','c3' => 'BLR'],
            ['id'=>'KH','name'=>'Camboya','c3' => 'KHM'],
            ['id'=>'CM','name'=>'Camerún','c3' => 'CMR'],
            ['id'=>'CA','name'=>'Canadá','c3' => 'CAN'],
            ['id'=>'CV','name'=>'Cabo Verde','c3' => 'CPV'],
            ['id'=>'KY','name'=>'Islas Caimán','c3' => 'CYM'],
            ['id'=>'CF','name'=>'República Centroafricana','c3' => 'CAF'],
            ['id'=>'LK','name'=>'Sri Lanka','c3' => 'LKA'],
            ['id'=>'TD','name'=>'Chad','c3' => 'TCD'],
            ['id'=>'CL','name'=>'Chile','c3' => 'CHL'],
            ['id'=>'CN','name'=>'China','c3' => 'CHN'],
            ['id'=>'TW','name'=>'Taiwán (República de China)','c3' => 'TWN'],
            ['id'=>'CX','name'=>'Isla de Navidad','c3' => 'CXR'],
            ['id'=>'CC','name'=>'Islas Cocos','c3' => 'CCK'],
            ['id'=>'CO','name'=>'Colombia','c3' => 'COL'],
            ['id'=>'KM','name'=>'Comoras','c3' => 'COM'],
            ['id'=>'YT','name'=>'Mayotte','c3' => 'MYT'],
            ['id'=>'CG','name'=>'República del Congo','c3' => 'COG'],
            ['id'=>'CD','name'=>'República Democrática del Congo','c3' => 'COD'],
            ['id'=>'CK','name'=>'Islas Cook','c3' => 'COK'],
            ['id'=>'CR','name'=>'Costa Rica','c3' => 'CRI'],
            ['id'=>'HR','name'=>'Croacia','c3' => 'HRV'],
            ['id'=>'CU','name'=>'Cuba','c3' => 'CUB'],
            ['id'=>'CY','name'=>'Chipre','c3' => 'CYP'],
            ['id'=>'CZ','name'=>'República Checa','c3' => 'CZE'],
            ['id'=>'BJ','name'=>'Benín','c3' => 'BEN'],
            ['id'=>'DK','name'=>'Dinamarca','c3' => 'DNK'],
            ['id'=>'DM','name'=>'Dominica','c3' => 'DMA'],
            ['id'=>'DO','name'=>'República Dominicana','c3' => 'DOM'],
            ['id'=>'EC','name'=>'Ecuador','c3' => 'ECU'],
            ['id'=>'SV','name'=>'El Salvador','c3' => 'SLV'],
            ['id'=>'GQ','name'=>'Guinea Ecuatorial','c3' => 'GNQ'],
            ['id'=>'ET','name'=>'Etiopía','c3' => 'ETH'],
            ['id'=>'ER','name'=>'Eritrea','c3' => 'ERI'],
            ['id'=>'EE','name'=>'Estonia','c3' => 'EST'],
            ['id'=>'FO','name'=>'Islas Feroe','c3' => 'FRO'],
            ['id'=>'FK','name'=>'Islas Malvinas','c3' => 'FLK'],
            ['id'=>'GS','name'=>'Islas Georgias del Sur y Sandwich del Sur','c3' => 'SGS'],
            ['id'=>'FJ','name'=>'Fiyi','c3' => 'FJI'],
            ['id'=>'FI','name'=>'Finlandia','c3' => 'FIN'],
            ['id'=>'AX','name'=>'Aland','c3' => 'ALA'],
            ['id'=>'FR','name'=>'Francia','c3' => 'FRA'],
            ['id'=>'GF','name'=>'Guayana Francesa','c3' => 'GUF'],
            ['id'=>'PF','name'=>'Polinesia Francesa','c3' => 'PYF'],
            ['id'=>'TF','name'=>'Tierras Australes y Antárticas Francesas','c3' => 'ATF'],
            ['id'=>'DJ','name'=>'Yibuti','c3' => 'DJI'],
            ['id'=>'GA','name'=>'Gabón','c3' => 'GAB'],
            ['id'=>'GE','name'=>'Georgia','c3' => 'GEO'],
            ['id'=>'GM','name'=>'Gambia','c3' => 'GMB'],
            ['id'=>'PS','name'=>'Palestina','c3' => 'PSE'],
            ['id'=>'DE','name'=>'Alemania','c3' => 'DEU'],
            ['id'=>'GH','name'=>'Ghana','c3' => 'GHA'],
            ['id'=>'GI','name'=>'Gibraltar','c3' => 'GIB'],
            ['id'=>'KI','name'=>'Kiribati','c3' => 'KIR'],
            ['id'=>'GR','name'=>'Grecia','c3' => 'GRC'],
            ['id'=>'GL','name'=>'Groenlandia','c3' => 'GRL'],
            ['id'=>'GD','name'=>'Granada','c3' => 'GRD'],
            ['id'=>'GP','name'=>'Guadalupe','c3' => 'GLP'],
            ['id'=>'GU','name'=>'Guam','c3' => 'GUM'],
            ['id'=>'GT','name'=>'Guatemala','c3' => 'GTM'],
            ['id'=>'GN','name'=>'Guinea','c3' => 'GIN'],
            ['id'=>'GY','name'=>'Guyana','c3' => 'GUY'],
            ['id'=>'HT','name'=>'Haití','c3' => 'HTI'],
            ['id'=>'HM','name'=>'Islas Heard y McDonald','c3' => 'HMD'],
            ['id'=>'VA','name'=>'Vaticano, Ciudad del','c3' => 'VAT'],
            ['id'=>'HN','name'=>'Honduras','c3' => 'HND'],
            ['id'=>'HK','name'=>'Hong Kong','c3' => 'HKG'],
            ['id'=>'HU','name'=>'Hungría','c3' => 'HUN'],
            ['id'=>'IS','name'=>'Islandia','c3' => 'ISL'],
            ['id'=>'IN','name'=>'India','c3' => 'IND'],
            ['id'=>'id','name'=>'Indonesia','c3' => 'idN'],
            ['id'=>'IR','name'=>'Irán','c3' => 'IRN'],
            ['id'=>'IQ','name'=>'Irak','c3' => 'IRQ'],
            ['id'=>'IE','name'=>'Irlanda','c3' => 'IRL'],
            ['id'=>'IL','name'=>'Israel','c3' => 'ISR'],
            ['id'=>'IT','name'=>'Italia','c3' => 'ITA'],
            ['id'=>'CI','name'=>'Costa de Marfil','c3' => 'CIV'],
            ['id'=>'JM','name'=>'Jamaica','c3' => 'JAM'],
            ['id'=>'JP','name'=>'Japón','c3' => 'JPN'],
            ['id'=>'KZ','name'=>'Kazajistán','c3' => 'KAZ'],
            ['id'=>'JO','name'=>'Jordania','c3' => 'JOR'],
            ['id'=>'KE','name'=>'Kenia','c3' => 'KEN'],
            ['id'=>'KP','name'=>'Corea del Norte','c3' => 'PRK'],
            ['id'=>'KR','name'=>'Corea del Sur','c3' => 'KOR'],
            ['id'=>'KW','name'=>'Kuwait','c3' => 'KWT'],
            ['id'=>'KG','name'=>'Kirguistán','c3' => 'KGZ'],
            ['id'=>'LA','name'=>'Laos','c3' => 'LAO'],
            ['id'=>'LB','name'=>'Líbano','c3' => 'LBN'],
            ['id'=>'LS','name'=>'Lesoto','c3' => 'LSO'],
            ['id'=>'LV','name'=>'Letonia','c3' => 'LVA'],
            ['id'=>'LR','name'=>'Liberia','c3' => 'LBR'],
            ['id'=>'LY','name'=>'Libia','c3' => 'LBY'],
            ['id'=>'LI','name'=>'Liechtenstein','c3' => 'LIE'],
            ['id'=>'LT','name'=>'Lituania','c3' => 'LTU'],
            ['id'=>'LU','name'=>'Luxemburgo','c3' => 'LUX'],
            ['id'=>'MO','name'=>'Macao','c3' => 'MAC'],
            ['id'=>'MG','name'=>'Madagascar','c3' => 'MDG'],
            ['id'=>'MW','name'=>'Malaui','c3' => 'MWI'],
            ['id'=>'MY','name'=>'Malasia','c3' => 'MYS'],
            ['id'=>'MV','name'=>'Maldivas','c3' => 'MDV'],
            ['id'=>'ML','name'=>'Malí','c3' => 'MLI'],
            ['id'=>'MT','name'=>'Malta','c3' => 'MLT'],
            ['id'=>'MQ','name'=>'Martinica','c3' => 'MTQ'],
            ['id'=>'MR','name'=>'Mauritania','c3' => 'MRT'],
            ['id'=>'MU','name'=>'Mauricio','c3' => 'MUS'],
            ['id'=>'MX','name'=>'México','c3' => 'MEX'],
            ['id'=>'MC','name'=>'Mónaco','c3' => 'MCO'],
            ['id'=>'MN','name'=>'Mongolia','c3' => 'MNG'],
            ['id'=>'MD','name'=>'Moldavia','c3' => 'MDA'],
            ['id'=>'ME','name'=>'Montenegro','c3' => 'MNE'],
            ['id'=>'MS','name'=>'Montserrat','c3' => 'MSR'],
            ['id'=>'MA','name'=>'Marruecos','c3' => 'MAR'],
            ['id'=>'MZ','name'=>'Mozambique','c3' => 'MOZ'],
            ['id'=>'OM','name'=>'Omán','c3' => 'OMN'],
            ['id'=>'NA','name'=>'Namibia','c3' => 'NAM'],
            ['id'=>'NR','name'=>'Nauru','c3' => 'NRU'],
            ['id'=>'NP','name'=>'Nepal','c3' => 'NPL'],
            ['id'=>'NL','name'=>'Países Bajos','c3' => 'NLD'],
            ['id'=>'CW','name'=>'Curazao','c3' => 'CUW'],
            ['id'=>'AW','name'=>'Aruba','c3' => 'ABW'],
            ['id'=>'SX','name'=>'Sint Maarten','c3' => 'SXM'],
            ['id'=>'BQ','name'=>'Bonaire, San Eustaquio y Saba','c3' => 'BES'],
            ['id'=>'NC','name'=>'Nueva Caledonia','c3' => 'NCL'],
            ['id'=>'VU','name'=>'Vanuatu','c3' => 'VUT'],
            ['id'=>'NZ','name'=>'Nueva Zelanda','c3' => 'NZL'],
            ['id'=>'NI','name'=>'Nicaragua','c3' => 'NIC'],
            ['id'=>'NE','name'=>'Níger','c3' => 'NER'],
            ['id'=>'NG','name'=>'Nigeria','c3' => 'NGA'],
            ['id'=>'NU','name'=>'Niue','c3' => 'NIU'],
            ['id'=>'NF','name'=>'Norfolk','c3' => 'NFK'],
            ['id'=>'NO','name'=>'Noruega','c3' => 'NOR'],
            ['id'=>'MP','name'=>'Islas Marianas del Norte','c3' => 'MNP'],
            ['id'=>'UM','name'=>'Islas ultramarinas de Estados Unidos','c3' => 'UMI'],
            ['id'=>'FM','name'=>'Micronesia','c3' => 'FSM'],
            ['id'=>'MH','name'=>'Islas Marshall','c3' => 'MHL'],
            ['id'=>'PW','name'=>'Palaos','c3' => 'PLW'],
            ['id'=>'PK','name'=>'Pakistán','c3' => 'PAK'],
            ['id'=>'PA','name'=>'Panamá','c3' => 'PAN'],
            ['id'=>'PG','name'=>'Papúa Nueva Guinea','c3' => 'PNG'],
            ['id'=>'PY','name'=>'Paraguay','c3' => 'PRY'],
            ['id'=>'PE','name'=>'Perú','c3' => 'PER'],
            ['id'=>'PH','name'=>'Filipinas','c3' => 'PHL'],
            ['id'=>'PN','name'=>'Islas Pitcairn','c3' => 'PCN'],
            ['id'=>'PL','name'=>'Polonia','c3' => 'POL'],
            ['id'=>'PT','name'=>'Portugal','c3' => 'PRT'],
            ['id'=>'GW','name'=>'Guinea-Bisáu','c3' => 'GNB'],
            ['id'=>'TL','name'=>'Timor Oriental','c3' => 'TLS'],
            ['id'=>'PR','name'=>'Puerto Rico','c3' => 'PRI'],
            ['id'=>'QA','name'=>'Catar','c3' => 'QAT'],
            ['id'=>'RE','name'=>'Reunión','c3' => 'REU'],
            ['id'=>'RO','name'=>'Rumania','c3' => 'ROU'],
            ['id'=>'RU','name'=>'Rusia','c3' => 'RUS'],
            ['id'=>'RW','name'=>'Ruanda','c3' => 'RWA'],
            ['id'=>'BL','name'=>'San Bartolomé','c3' => 'BLM'],
            ['id'=>'SH','name'=>'Santa Elena, Ascensión y Tristán de Acuña','c3' => 'SHN'],
            ['id'=>'KN','name'=>'San Cristóbal y Nieves','c3' => 'KNA'],
            ['id'=>'AI','name'=>'Anguila','c3' => 'AIA'],
            ['id'=>'LC','name'=>'Santa Lucía','c3' => 'LCA'],
            ['id'=>'MF','name'=>'San Martín','c3' => 'MAF'],
            ['id'=>'PM','name'=>'San Pedro y Miquelón','c3' => 'SPM'],
            ['id'=>'VC','name'=>'San Vicente y las Granadinas','c3' => 'VCT'],
            ['id'=>'SM','name'=>'San Marino','c3' => 'SMR'],
            ['id'=>'ST','name'=>'Santo Tomé y Príncipe','c3' => 'STP'],
            ['id'=>'SA','name'=>'Arabia Saudita','c3' => 'SAU'],
            ['id'=>'SN','name'=>'Senegal','c3' => 'SEN'],
            ['id'=>'RS','name'=>'Serbia','c3' => 'SRB'],
            ['id'=>'SC','name'=>'Seychelles','c3' => 'SYC'],
            ['id'=>'SL','name'=>'Sierra Leona','c3' => 'SLE'],
            ['id'=>'SG','name'=>'Singapur','c3' => 'SGP'],
            ['id'=>'SK','name'=>'Eslovaquia','c3' => 'SVK'],
            ['id'=>'VN','name'=>'Vietnam','c3' => 'VNM'],
            ['id'=>'SI','name'=>'Eslovenia','c3' => 'SVN'],
            ['id'=>'SO','name'=>'Somalia','c3' => 'SOM'],
            ['id'=>'ZA','name'=>'Sudáfrica','c3' => 'ZAF'],
            ['id'=>'ZW','name'=>'Zimbabue','c3' => 'ZWE'],
            ['id'=>'ES','name'=>'España','c3' => 'ESP'],
            ['id'=>'SS','name'=>'Sudán del Sur','c3' => 'SSD'],
            ['id'=>'SD','name'=>'Sudán','c3' => 'SDN'],
            ['id'=>'EH','name'=>'República Árabe Saharaui Democrática','c3' => 'ESH'],
            ['id'=>'SR','name'=>'Surinam','c3' => 'SUR'],
            ['id'=>'SJ','name'=>'Svalbard y Jan Mayen','c3' => 'SJM'],
            ['id'=>'SZ','name'=>'Suazilandia','c3' => 'SWZ'],
            ['id'=>'SE','name'=>'Suecia','c3' => 'SWE'],
            ['id'=>'CH','name'=>'Suiza','c3' => 'CHE'],
            ['id'=>'SY','name'=>'Siria','c3' => 'SYR'],
            ['id'=>'TJ','name'=>'Tayikistán','c3' => 'TJK'],
            ['id'=>'TH','name'=>'Tailandia','c3' => 'THA'],
            ['id'=>'TG','name'=>'Togo','c3' => 'TGO'],
            ['id'=>'TK','name'=>'Tokelau','c3' => 'TKL'],
            ['id'=>'TO','name'=>'Tonga','c3' => 'TON'],
            ['id'=>'TT','name'=>'Trinidad y Tobago','c3' => 'TTO'],
            ['id'=>'AE','name'=>'Emiratos Árabes Unidos','c3' => 'ARE'],
            ['id'=>'TN','name'=>'Túnez','c3' => 'TUN'],
            ['id'=>'TR','name'=>'Turquía','c3' => 'TUR'],
            ['id'=>'TM','name'=>'Turkmenistán','c3' => 'TKM'],
            ['id'=>'TC','name'=>'Islas Turcas y Caicos','c3' => 'TCA'],
            ['id'=>'TV','name'=>'Tuvalu','c3' => 'TUV'],
            ['id'=>'UG','name'=>'Uganda','c3' => 'UGA'],
            ['id'=>'UA','name'=>'Ucrania','c3' => 'UKR'],
            ['id'=>'MK','name'=>'Macedonia','c3' => 'MKD'],
            ['id'=>'EG','name'=>'Egipto','c3' => 'EGY'],
            ['id'=>'GB','name'=>'Reino Unido','c3' => 'GBR'],
            ['id'=>'GG','name'=>'Guernsey','c3' => 'GGY'],
            ['id'=>'JE','name'=>'Jersey','c3' => 'JEY'],
            ['id'=>'IM','name'=>'Isla de Man','c3' => 'IMN'],
            ['id'=>'TZ','name'=>'Tanzania','c3' => 'TZA'],
            ['id'=>'US','name'=>'Estados Unidos','c3' => 'USA'],
            ['id'=>'VI','name'=>'Islas Vírgenes de los Estados Unidos','c3' => 'VIR'],
            ['id'=>'BF','name'=>'Burkina Faso','c3' => 'BFA'],
            ['id'=>'UY','name'=>'Uruguay','c3' => 'URY'],
            ['id'=>'UZ','name'=>'Uzbekistán','c3' => 'UZB'],
            ['id'=>'VE','name'=>'Venezuela','c3' => 'VEN'],
            ['id'=>'WF','name'=>'Wallis y Futuna','c3' => 'WLF'],
            ['id'=>'WS','name'=>'Samoa','c3' => 'WSM'],
            ['id'=>'YE','name'=>'Yemen','c3' => 'YEM'],
            ['id'=>'ZM','name'=>'Zambia','c3' => 'ZMB']
        ]);            
    }
}
