<?php
//const SERVERURL="https://absolutebrandingcompany.com/";
const SERVERURL="http://localhost:/absolute/";
date_default_timezone_set ('Europe/Madrid');

// Head y Descripcion INICIO

const COMPANY="
<title> Agencia de marketing y publicidad Vigo y Madrid · Absolute Co. </title>
<meta name='description' content='Agencia de Marketing y publicidad en Vigo, diseño web, SEO, SEM, Branding para marcas, gestión de RRSS y organización de eventos en Galicia Madrid.'>
<meta name='keywords' content='Agencia Marketing Vigo, Marketing Vigo, Posicionamiento SEO vigo, Diseño de tienda online Galicia, Diseño gráfico Vigo, Diseño web Vigo, Diseño web Madrid'>
";
const COMPANYnosotros="
<title>Consultora de Marketing Vigo y Madrid · Absolute Co.</title>
<meta name='description' content='Agencia de Marketing Digital, Comunicación y Publicidad en Vigo y Madrid. Consultora de Marketing y Estrategia para Empresas y Pymes'>
<meta name='keywords' content='Agencia de Marketing Digital, Agencia de Publicidad Vigo, Agencia de Comunicación en Vigo, Agencia de Marketing Madrid, Agencia de Marketing Vigo'>
";

const COMPANYbranding="
<title>Agencia de branding y publicidad en Vigo · Absolute Co.</title>
<meta name='description' content='Agencia de branding, diseño y creación de marca en Vigo. Imagen de marca e identidad corporativa en Vigo, publicidad en medios, diseño gráfico y packaging.'>
<meta name='keywords' content='Branding y Diseño de Marca, Agencia de Diseño de Marca, Imagen Corporativa Vigo, Imagen de Marca Vigo, Diseño de Packaging Vigo, Diseño e Imagen de Marca Vigo'>
";

const COMPANYdigital="
<title>Agencia de marketing digital Vigo · Absolute Co.</title>
<meta name='description' content='Agencia de Marketing Digital Vigo. Diseño y Desarrollo Web, Tiendas Online, Hosting y SEO en Vigo. Gestionamos campañas en Google Ads y Redes Sociales.'>
<meta name='keywords' content='Marketing Digital en Vigo, Marketing Digital en Madrid, Posicionamiento Web, SEO Vigo, SEM Vigo,  Diseño Web en Vigo, Diseño de Páginas Web, Diseño de Tiendas Online Vigo, Geatión de eCommerce Vigo, Gestión de Redes Sociales Vigo, Anuncios en Google Vigo, SEO Madrid'>
";

const COMPANYevents="
<title>Agencia de eventos en Galicia y Madrid · Absolute Co.</title>
<meta name='description' content='Agencia integral de Eventos en Galicia y Madrid. Organización de eventos en Vigo, coordinación de ferias, convenciones, eventos sociales Vigo, Madrid.'>
<meta name='keywords' content='Organización de Eventos Vigo, Organización de Ferias Vigo, Organización de Congresos Vigo, Organización de Exposiciones Vigo, Organización de Teambuilding vigo, Organización de Convenciones, Organización de Eventos Sociales Vigo, Organización de Congresos Médicos en Galicia'>
";

const COMPANYcontacto="
<title>Contacta con Absolute Co. Agencia de Marketing.</title>
<meta name='description' content='Contacta con especialistas en Marketing y Publicidad para empresas, con sede en Vigo y Madrid. Servicios de Marketing Externo para Pymes.'>
<meta name='keywords' content='Agencia de Marketing, Agencia de Publicidad Vigo, Agencia de Diseño Web Vigo, Agencia de Marketing Vigo, Agencia de Comunicación Vigo, Consultora de Marketing Vigo, Agencia de Publicidad Madrid, Agencia de Diseño Web Madrid, Agencia de Marketing Madrid, Agencia de Comunicación Madrid, Consultora de Marketing Madrid'>
";

const COMPANYfilosofia="
<title>Agencia de Publicidad en Vigo, Madrid · Absolute Co.</title>
<meta name='description' content='Agencia de Publicidad en Vigo y Madrid. Elaboración de estrategias para campañas, seguimiento e informes de campañas publicitarias en Medios.'>
<meta name='keywords' content='Marketing que Enamora, Agencia de Publicidad Vigo, Agencia de Comunicación Vigo, Agencia de Publicidad y Comunicación Madrid, Gestion de Anuncios en Medios de Comunicación Madrid, Central de Medios, Compra de Espacios Publicitarios, Planificación de Medios, Investigación de Mercados, Plan de Negocio, Plan de Viabilidad, Marketing Plan, Planificación de Medio'>
";

//
const COMPANYabsoluteplus="
<title> Agencia de diseño y marketing digital Vigo · Absolute Co. </title>
<meta name='description' content='Agencia de Marketing en Vigo y Madrid. En Absolute Co. nos especializamos en estrategias de marketing de Emociones, plan de marketing y retorno de la inversión.'>
<meta name='keywords' content='Marketing que Enamora, Agencia de Publicidad Vigo, Agencia de Comunicación Vigo, Agencia de Publicidad y Comunicación Madrid, Gestion de Anuncios en Medios de Comunicación Madrid, Central de Medios, Compra de Espacios Publicitarios, Planificación de Medios, Investigación de Mercados, Plan de Negocio, Plan de Viabilidad, Marketing Plan, Planificación de Medio'>
";

const COMPANYaz="
<title>Glosario de Marketing y publicidad · Absolute Co.</title>
<meta name='description' content='Glosario profesional de términos de Marketing y publicidad. Agencia de diseño web, posicionamiento SEO, publicidad y estrategias de marketing.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYavisolegal="
<title> Avisos Legales · Absolute Co. </title>
<meta name='description' content='Términos de Marketing y Publicidad. Diseño web, Tiendas online, Gráfica Publicitaria, Posicionamiento SEO, Estrategias de Marketing Vigo Madrid.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYprivacidad="
<title> Política de Privacidad y Cookies · Absolute Co. </title>
<meta name='description' content='Términos de Marketing y Publicidad. Diseño web, Tiendas online, Gráfica Publicitaria, Posicionamiento SEO, Estrategias de Marketing Vigo Madrid.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYidentidadmarca="
<title>Imagen de marca e identidad corporativa · Absolute Co.</title>
<meta name='description' content='Diseño de identidad corporativa e imagen de marca para empresas, branding, naming, redacción publicitaria, fotografía y vídeo para empresas en Vigo.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYcreatividad="
<title>Diseño Gráfico, logotipos e imagen Publicitaria · Absolute Co.</title>
<meta name='description' content='Diseño gráfico en Vigo, logotipos, gráficas publicitarias en cartelería y señaléticas, diseño editorial e imagen de marca en Vigo, Galicia.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYpackaging="
<title>Diseño de etiquetas y packaging · Absolute Co.</title>
<meta name='description' content='Diseño de packaging para marcas y productos en Vigo. Diseño a medida de envases y etiquetas, pensados en atraer al consumidor.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYcentralmedios="
<title>Central de medios publicitarios Madrid y Vigo · Absolute Co.</title>
<meta name='description' content='Central de medios y planificación publicitaria en Vigo. Diseñamos campañas publicitarias en medios con seguimientos y resultados.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYpublicidad="
<title>Publicidad en medios Vigo y Madrid · Absolute Co.</title>
<meta name='description' content='Gestión publicitaria en Tv, Radio, prensa escrita y medios digitales como Google Adwords, vallas, mupis, etc. en Vigo y Madrid.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYasesoriamarcas="
<title>Auditoría de Marca y Planes de Marketing · Absolute Co.</title>
<meta name='description' content='Consultoría de Marca para empresas en Vigo, Madrid. Diseño web, Tiendas online, Gráfica Publicitaria, SEO, SEM, Marketing de contenidos, etc.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYdisenoweb="
<title>Diseño web en Vigo · Absolute Co.</title>
<meta name='description' content='Diseño web en Vigo, programación y desarrollo web a medida. Contrata un diseño web responsive para móviles, portátiles, tabletas y ordenadores.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYconsultoradigital="
<title>Consultoría y estrategia digital · Absolute Co.</title>
<meta name='description' content='Consultoría y estrategia digital en Vigo, para empresas y Pymes. Planificamos la estrategia digital adecuada para incrementar tus clientes y ventas.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYasesoriadigital="
<title>Posicionamiento web, SEO y marketing digital · Absolute Co.</title>
<meta name='description' content='Posicionamiento web, SEO en Vigo, campañas de marketing digital, SEM, SMO/SMM y Email Marketing para empresas en Vigo.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYhosting="
<title>Alojamiento Web / hosting y dominios en Galicia · Absolute Co.</title>
<meta name='description' content='Alojamiento web en Vigo. Contrata un hosting a medida para tu web en Vigo, Galicia. Hosting, renovación y compra de dominios en un solo clic.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYsocialmedia="
<title>Gestión de Redes Sociales Vigo · Absolute Co.</title>
<meta name='description' content='Gestión de Redes Sociales en Vigo, estrategias de incremento de seguidores e interacciones para Marcas, productos y empresas.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYtiendaonline="
<title>Diseño de Tiendas Online Vigo · Absolute Co.</title>
<meta name='description' content='Diseño de tiendas online en Vigo a medida. Creación de tiendas online en Vigo, gestión de eCommerce y elaboración de contenidos online.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYdisenostand="
<title>Diseño y Construcción de Stands Madrid Vigo · Absolute Co.</title>
<meta name='description' content='Diseño y construcción de stands en Vigo, Madrid. Montaje y desmontaje de stands, nos adaptados a la necesidad del cliente con precios competitivos.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYdecoracionambientacion="
<title>Decoración y Ambientación de Espacios · Absolute Co.</title>
<meta name='description' content='Decoración de ambientes para espacios en Galicia y Madrid. Equipo de profesionales especializados en decoración de espacios de eventos sociales o empresariales.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYcatering="
<title>Catering Profesional para Eventos Galicia · Absolute Co.</title>
<meta name='description' content='Catering profesional para eventos en Galicia. Catering personalizado para eventos, con profesionales reputados en Galicia y Madrid, variedad de propuestas.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYfotografiavideo="
<title>Producción Audiovisual para Eventos Galicia · Absolute Co.</title>
<meta name='description' content='Producción audiovisual para eventos en Galicia. Contamos con los equipos y personal cualificado para tu evento. Fotografía y vídeo para eventos en Galicia y Madrid. '>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYproducciongrafica="
<title>Producción e Imagen Gráfica de eventos · Absolute Co.</title>
<meta name='description' content='Producción gráfica para eventos en Galicia. Diseño de rótulos, roll ups, lanyards, invitaciones, flyers, lonas, papelería corporativa para tu evento.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYorganizacioneventos="
<title>Organización de Eventos Galicia Madrid · Absolute Co.</title>
<meta name='description' content='Organización de eventos Galicia y Madrid. Profesionales del sector especializados en planificación, ejecución y seguimiento de eventos.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYagenciaazafatas="
<title>Azafatas y Promotoras para Eventos · Absolute Co.</title>
<meta name='description' content='Agencia de azafatas en Galicia. Contamos con azafatas de imagen e idiomas, promotoras comerciales y azafatas de protocolo para eventos, stands y convenciones. '>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYinfluencers="
<title>Artistas, Influencers y Celebrities · Absolute Co.</title>
<meta name='description' content='Contratación de Artistas e Influencers para eventos en Galicia, Madrid, España y Portugal. Artistas e influencers para promocionar ferias, stands o eventos de marca.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYprotocolo="
<title>Servicios de Protocolo, Comunicación y RRPP · Absolute Co.</title>
<meta name='description' content='Protocolo, comunicación y RRPP para eventos en Galicia y Madrid. Servicio de organización de personal, etiqueta y protocolo de actuación en eventos.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYpersonalauxiliar="
<title>Personal Auxiliar para eventos Galicia· Absolute Co.</title>
<meta name='description' content='Contratación de personal auxiliar para eventos en Galicia. Camareras, Chef´s, ayudantes de cocina, seguridad, recepción y cordinación para eventos.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYlogistica="
<title>Logística para Eventos Galicia Madrid · Absolute Co.</title>
<meta name='description' content='Lógistica para eventos en Galicia. Contamos con todo tipo de vehículos para transportar material para la preparación y funcionamiento del evento.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";

const COMPANYmerchandisingpersonalizado="
<title>Merchandising Personalizado Galicia · Absolute Co.</title>
<meta name='description' content='Merchandising para eventos en Galicia. Variedad de ideas y materiales para crear merchandising personalizado para empresas y marcas en Galicia.'>
<meta name='keywords' content='Consultora de Marketing Vigo, Agencia de Marketing Vigo, Posicionamiento SEO Vigo, Diseño de Tienda Online Vigo, Creación deI Imagen de Marca, Consultora de Marketing Madrid, Agencia de Marketing Madrid, Posicionamiento SEO Madrid, Diseño de Tienda Online Madrid'>
";














// Errores
const COMPANYerror="
<title> ERROR </title>
<meta name='aun no hay nada aqui o esto no existe'>
<meta name='keywords' content='Branding y Diseño de Marca, Agencia de Diseño de Marca, Imagen Corporativa Vigo, Imagen de Marca Vigo, Diseño de Packaging Vigo, Diseño e Imagen de Marca Vigo'>
";

// Head y Descripcion Final

 ?>
