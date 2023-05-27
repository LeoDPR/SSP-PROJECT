-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 06:26:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuerpo_academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulos` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `url_descarga` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `issn` varchar(50) DEFAULT NULL,
  `fuente_publicacion` varchar(100) DEFAULT NULL,
  `indizado` tinyint(1) DEFAULT NULL,
  `arbitrado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulos`, `nombre`, `fecha_publicacion`, `categoria`, `descripcion`, `url_descarga`, `imagen`, `issn`, `fuente_publicacion`, `indizado`, `arbitrado`) VALUES
(35, 'Adaptive Model using MAS', '2016-10-01', 'Computer Science', 'In this paper, we propose an Adaptive Model using MAS. The MAS represented by three principal \r\nagents that allow adapt roles based on humans’ requirements. The model describes explicit interactions between \r\nthe elements of the system; these elements may reflect feedback from the system allowing adaptability at any \r\nmoment and circumstances to be ready to the complexity of the real world.', 'INDIA Adaptive_NR.pdf', 'ArticleDefault.jpg', '23501022', 'International Journal of Recent Research in Mathematics Computer Science and Information Technology', 0, 1),
(36, 'An Overview of Task Scheduling on Arduino', '2017-10-01', 'Computer Science', 'The  Arduino  family  of  microcontrollers  is widely  used  today.  However,  few  projects address  the  issue  of  scheduling  tasks  in these microcontrollers. This document presents the methods of scheduling tasks on these platforms.', 'An Overview of Task Scheduling.pdf', 'ArticleDefault.jpg', '23501022 ', 'International Journal of Recent Research in Mathematics Computer Science and Information Technology', 0, 1),
(39, 'GESTIÓN INNOVADORA DEL DESARROLLO DE UN SIMULADOR SOCIAL PARA LA DETECCIÓN Y PREVENCIÓN DE ADICCIONES EN TIJUANA, MÉXICO', '2018-12-01', '', 'La gestión de proyectos resulta de vital importancia para las organizaciones hoy en día, enfocada por algunos como la \r\ncoordinación de todos los factores y recursos que se emplean para el logro y cumplimiento del objetivo de la entidad, un \r\nproducto, servicio, el aumento de la calidad, o algún cambio positivo para añadir valor a un proceso dentro de la empresa. \r\nEn este artículo se aborda la propuesta de implementación de un modelo de gestión para proyectos de desarrollo de \r\nsoftware que será de gran impacto para la comunidad. La aplicación de metodologías innovadoras de administración de \r\nproyectos para el entorno en el cual se desarrollará es novedosa, la propuesta influirá en la entrega a tiempo y forma del \r\nsoftware lo que significará mayor calidad del producto y resultados en un menor tiempo, aportará un modelo que se podrá \r\nemplear como base para futuros desarrollos y un mayor conocimiento de estas metodologías, su aplicación y sus beneficios. \r\nLa  entrega  de  este  Software  en  el  tiempo  acordado  brindara  la  posibilidad  de  atender  con  mayor  premura  a  casos \r\nespecíficos de riesgo, a la vez generará un cúmulo de información estadística significativo que apoyará a la iniciativa \r\npública, privada y social a tomar decisiones oportunas para atender los casos de mayor riesgo de caer en el consumo de \r\nsustancias adictivas. ', 'GESTIÓN INNOVADORA DEL DESARROLLO DE UN SIMULADOR.pdf', 'GESTIÓN INNOVADORA DEL DESARROLLO DE UN SIMULADOR SOCIAL PARA LA  DETECCIÓN Y PREVENCIÓN DE ADICCIONES EN TIJUANA, MÉXICO.jpg', '23870893 ', 'Revista de Investigacion en Tecnologias de la Informacion', 0, 1),
(40, 'Modelling the Interruption on HCI Using BDI Agents with the Fuzzy Perceptions Approach: An Interactive Museum Case Study in Mexico', '2017-08-13', 'Applied Sciences', 'Technological advancements have revolutionized the proliferation and availability of information to users, which has created more complex and intensive interactions between users and systems. The learning process of users is essential in the construction of new knowledge when pursuing improvements in user experience. In this paper, the interruption factor is considered in relation to interaction quality due to human–computer interaction (HCI) being seen to affect the learning process. We present the results obtained from 500 users in an interactive museum in Tijuana, Mexico as a case study. We model the HCI of an interactive exhibition using belief–desire–intention (BDI) agents; we adapted the BDI architecture using the Type-2 fuzzy inference system to add perceptual human-like capabilities to agents, in order to describe the interaction and interruption factor on user experience. The resulting model allows us to describe content adaptation through the creation of a personalized interaction environment. We conclude that managing interruptions can enhance the HCI, producing a positive learning process that inﬂuences user experience. A better interaction may be achieved if we offer the right kind of content, taking the interruptions experienced into consideration.', '(JCR17) Modelling Interruption ISSN_ 2076-3417.pdf', 'ArticleDefault.jpg', '20763417 ', 'Applied Sciences', 1, 0),
(41, 'Prediction and Prevention of Addictions Through the Implementation of a Computational Social Simulator', '2017-05-21', 'Social', 'The main objective of this work is to determine if a computer simu‐ lator can identify the interaction between risk factors and protective factors in relation to the emergence of substance use problems in a population of adoles‐ cents. This simulator will undoubtedly reduce time, while allowing statistics to be used to support public, private and social initiatives in order to make agile decisions in the area of health; by means of an accumulated knowledge base that is based on the experience related to research and support to the community aﬀected or at risk of falling into the consumption of addictive substances. The prediction and prevention of addictions in Baja California and the population of Mexico in which it is used will be strengthened by this tool. The regulatory framework that establishes the prevention of addictions allows diﬀerent strategies to strengthen and contribute to the Mexican government’s work in the area of public health and addictions.', '(SJR17) Prediction and Prevention ISSN_2190-3018.pdf', 'Prediction and Prevention of Addictions Through the Implementation of a Computational Social Simulator.jpeg', '21903026', 'Innovation inMedicine and Healthcare 2017', 1, 0),
(42, 'La importancia de la gobernanza de las tecnologías de la información y la comunicación.', '2017-11-01', 'Tecnologias de la información', 'La información empleada, administrada, accedida, trabajada y entregada a los usuarios responsables de la misma, por las Tecnologías de la Información y la Comunicación (TIC) es hoy uno de los activos más importantes en las instituciones; por medio de la Gobernanza de las TIC se puede administrar y/o veri- ficar, la eficacia del uso de los recursos computacio- nales involucrados en el manejo de esta, en las diver- sas áreas que componen la organización. Sin duda la Información capturada, procesada, almacenada y dis- tribuida por los procesos principales de una institución deben asegurar el mayor de los controles de acceso, de entrada, salida, autorización y nivel de acceso a la misma, la Gobernabilidad de las TIC permitirá que este objetivo se cumpla.Los estándares y marcos regulatorios formados a nivel nacional e internacional apoyan al cumplimiento de esta meta, para ello hay que adoptar su utilización en base a los requerimientos que tenemos. lo anterior permitirá un mayor control, calidad, eficiencia eficacia y productividad dentro de los procesos donde se gobiernen las TIC, lo cual redundara en una mayor competitividad.El manejo de las TIC a nivel nacional  e internacional es  sin  duda   creciente   y  la  manera   de  controlar accesos  no permitidos  es cada vez más complicado es por ello la importancia  de la gobernanza  de las TIC.La investigación exploratoria en la gobernanza de las TIC nos permite detectar un área de oportunidad en México dado el nivel de implementación de marcos regulatorios que deben proteger a los usuarios de las TIC.', '(ARTICULO  REVISTA INDEXADA CONACYT) Importancia.pdf', 'La importancia de la gobernanza de las tecnologías de la información y la comunicación..jpg', '23958340', 'INNOVAITESCYT LOS CABOS', 1, 1),
(43, 'Modelling the Interaction Levels in HCI Using an Intelligent Hybrid System with Interactive Agents: A Case Study of an Interactive Museum Exhibition M', '2018-03-15', 'Applied Sciences', 'Technology has become a necessity in our everyday lives and essential for completing activities we typically take for granted; technologies can assist us by completing set tasks or achieving desired goals with optimal affect and in the most efﬁcient way, thereby improving our interactive experiences. This paper presents research that explores the representation of user interaction levels using an intelligent hybrid system approach with agents. We evaluate interaction levels of Human-Computer Interaction (HCI) with the aim of enhancing user experiences. We consider the description of interaction levels using an intelligent hybrid system to provide a decision-making system to an agent that evaluates interaction levels when using interactive modules of a museum exhibition. The agents represent a high-level abstraction of the system, where communication takes place between the user, the exhibition and the environment. In this paper, we provide a means to measure the interaction levels and natural behaviour of users, based on museum user-exhibition interaction. We consider that, by analysing user interaction in a museum, we can help to design better ways to interact with exhibition modules according to the properties and behaviour of the users. An interaction-evaluator agent is proposed to achieve the most suitable representation of the interaction levels with the aim of improving user interactions to offer the most appropriate directions, services, content and information, thereby improving the quality of interaction experienced between the user-agent and exhibition-agent.', '(ARTICULO  REVISTA INDEXADA JCR) Modelling.pdf', 'Modelling the Interaction Levels.jpg', '20763417', 'Feasibility of Using Graphene Oxide Nanoflake (GONF) as Additive of Cement Composite', 1, 0),
(44, 'A Fuzzy Inference System and Data Mining Toolkit for Agent-Based Simulation in NetLogo', '2018-01-01', 'Computer Science', 'In machine learning, hybrid systems are methods that combine different computational techniques in modeling. NetLogo is a favorite tool used by scientists with limited ability as programmers who aim to leverage computer modeling via agent-oriented approaches. This paper introduces a novel modeling framework, JT2FIS NetLogo, a toolkit for integrating interval Type-2 fuzzy inference systems in agent-based models and simulations. An extension to NetLogo, it includes a set of tools oriented to data mining, conﬁguration, and implementation of fuzzy inference systems that modeler used within an agent-based simulation. We discuss the advantages and disadvantages of integrating intelligent systems in agent-based simulations by leveraging the toolkit, and present potential areas of opportunity.', '(ARTICULO  REVISTA INDEXADA SJR) AFuzzy.pdf', 'ArticleDefault.jpg', '21984190 ', 'Computer  Science and  Engineering—Theory  and  Applications', 1, 0),
(47, 'Influence of the Betweenness Centrality to Characterize the Behavior of Communication in a Group', '2018-02-01', 'Computer Science', 'The behavior of the distribution of a rumor must emerge according to the relations between the individuals. Taking as a reference that human society creates links of friendship through random encounters and conscious decisions, therefore, a rumor can be spread considering the degree of grouping that individuals have, also their location in the network and if they decide to cooperate or not. Considering the analysis of the topology that interconnects a set of individuals, relationships are detected between them that allow recognizing their centrality of degree, between- ness, and closeness. For a rumor to spread it requires that the individual has an incentive by which he decides to cooperate or not in the distribution of it. In this chapter, we propose an agent-based model that allows the identiﬁcation of the central measures of each of the individuals that integrate a group which has a topology based on the Barbell’s graph.', '(ARTICULO  REVISTA INDEXADA SJR) Influences.pdf', 'ArticleDefault.jpg', '21984190', 'Computer Science and Engineering—Theory and Applications', 1, 0),
(48, 'Elements that have an Impact on the Glass Ceiling as a Competitive Factor of Family-Owned Service Sector Companies in Tijuana, B.C., Mexico ', '2019-01-01', 'Service Sector', 'The participation of women today is more representative within the organizational structure of companies, resulting in a greater participation in management positions, increasingly recognizing their effort in the workplace. For a family business, it is fundamental to adapt to the current labour market, modify its appreciations and adapt some values so that it is competitive and able to remain in the market. Therefore, it is important for a woman to progress in the family business. Management must support their growth and develop a life and career plan to give them the opportunity to ascend within the organizational hierarchy. Hence the importance of conducting this research and determining the elements that directly affect the glass ceiling of family-owned service companies in Tijuana, B.C., Mexico. To achieve the results, 135 representative surveys were carried out on the employees of the family service sector companies registered in the Mexican Business Information System (SIEM), corresponding to Tijuana, Baja California, Mexico, the research being carried out during 2016 and the first four months of 2017. Quantitative research is applied to survey conduction through questionnaires to the employees of family companies in the service sector to obtain the results.', '(ARTICULO  REVISTA INDEXADA SJR) Elements.pdf', 'ArticleDefault.jpg', '22011315', 'International Journal of Innovation, Creativity and Change', 1, 0),
(49, 'Toward a Model of Management Processes to Support or Increasethe Competitiveness of a University Professor', '2019-06-20', 'Computer Science', 'This article proposes the revision of the information required to establish the management processes to support or increase the competitiveness of a University professor, where complex processes intervene that must be attended by means of a model based on agents; it also presents the need to identify the characteristics that can and should drive a substantial improvement in the teacher’s performance, intelligent agents based on the perception of information from the environment, to produce a result that can be communicated to another or others through a model based on intelligent agents, which allow to strengthen the competitiveness of a teacher.', '(ARTICULO  REVISTA INDEXADA SJR) Towards a Model.pdf', 'Agents and Multi agents Systems 2019.jpg', '21903026', 'Agents and Multi-agent Systems: Technologies and Applications 2019', 0, 1),
(50, 'Evaluating of Mobile Applications and the Mental Activation of the Older Adult', '2019-03-30', 'Technology', 'This article describes how ICTs have changed the ways of social- izing among people. Especially the elderly. Thus, an experiment was presented that allowed evaluating 25 older adults in courses using ICT. A qualitative methodology is applied to analyze in particular the situation experienced by older adults in relation to the use of technologies, their experiences at the end of the computer course and how it inﬂuences them in their daily lives. Results are obtained derived from taking the technology courses, as well as answering a questionnaire before and after the course. The result shows that the technology allows any adult is able to use a computer, smartphone, tablet among other devices as long as you have patience and do not suffer from any health impediment that prohibits it.', '(ARTICULO REVISTA INDEXADA SJR)  Evaluating.pdf', 'ArticleDefault.jpg', '21945365', 'Advances in Intelligent Systems and Computing', 1, 0),
(51, 'A Fuzzy Inference System as a Tool to Measure Levels of Interaction', '2019-03-30', 'Fuzzy inference system', 'The interaction between humans and their environment is a current research area. Technology has been part of the environment with which humans have forged their progress, making this socio-technical phenomenon a field of study of interest in the field of research and technological development. In this paper, we present a FIS as a Tool to Measure Levels of Interaction during human-machine interaction. The proposal describes a system that bases its reasoning on user performance during user-exhibition interaction context in an interactive museum. Thte performance is determined by levels of interaction derived from intercativity actions and situations within the user-exhibition context. The FIS objective is to improve the user experience by managing the interaction process in user-exhibition relationships.', '(ARTICULO REVISTA INDEXADA SJR) A FIS Tool.pdf', 'ArticleDefault.jpg', '21945357', 'Advances in Intelligent Systems and Computing', 1, 0),
(52, 'Complejidad y gestión del conocimiento e innovación', '2019-01-01', 'Innovación', 'Las  organizaciones  requieren  practicar  una  forma  de  aprendizaje \r\ncolaborativo  como  una  estrategia  de  mejora  continua.  Generar  innovación \r\nconstruye capacidades y competencias nuevas traducidas en ventajas competitivas \r\npara las organizaciones, ya que, en mundo complejo, estas ventajas son claves \r\npara diferenciarse en el mercado global. El presente trabajo aborda la gestión del \r\nconocimiento y la innovación desde un enfoque de la complejidad. Se discute como \r\nun modelo de auto-organización puede enfrentar la complejidad, y como juega un \r\npapel importante para la mejora continua en las organizaciones.', '(ARTICULO REVISTA INDEXADA SJR) Complejidad y Gestion.pdf', 'RISTI.jpg', '16469895', 'RISTI - Revista Iberica de Sistemas e Tecnologias de Informacao', 1, 0),
(53, 'Multi-agent Complex System for Identification of Characteristics and Personality Types and Their Relationship in the Process of Motivation of Students', '2019-06-20', 'Complex Systems', 'This paper presents a proposal design of multi-agent complex system for the identification of the characteristics and the types of personality of university students as well as their relationship in the process of motivation for them. Diagnosis and identification of personality types are based on the analysis of knowledge base and the collected information of students with concrete actions that agents through their communication skills and interaction with the rules and standards defined receive, analyze, and determine the identification of outstanding personality type and the most important motivating factors according to the identified personality.', '(ARTICULO REVISTA INDEXADA SJR) Complex MA.pdf', 'Multi-agent Complex System for Identification of Characteristics and Personality Types and Their Relationship in the Process of Motivation of Students.jpg', '21903018', 'Agents and Multi-agent Systems: Technologies and Applications 2019', 1, 0),
(54, 'Formalization of the Agent-Based Model for the Detection of Behavior Patterns in Older Adults Who Start Using ICT', '2019-06-06', 'Agent-based model', 'The purpose of this article is to present the formalization of the agent-based model, which will detect the patterns that shape the behavior of older adults influenced by the use of new information and communication technologies. This model aims to achieve the identification of possible risk factors that adults can present, to minimize them and to increase the protective factors that allow mental activation and active aging through the correlation between energy and motivation. In addition, the model could help create behavioral simulations that could be presented by adults through the four agents contemplated: adult agent, detection agent, content agent, and agent activity, and after formalization, similar capabilities will be imitated human beings that can have as beliefs, desires, and intentions and that will allow them to communicate and interact with the exchange of information to allow guide the behavior of adults and active and physical health and positive mental health.', '(ARTICULO REVISTA INDEXADA SJR) Formalization.pdf', 'Formalization of the Agent-Based Model for the Detection of Behavior Patterns in Older Adults Who Start Using ICT.jpg', '21903018', 'Innovation in Medicine and Healthcare Systems, and Multimedia', 1, 0),
(55, 'Keystroke and Pointing Time Estimation for Touchscreen-Based Mobile Devices: Case Study Children with ASD', '2019-01-01', 'Computer Science', 'Nowadays, children with autism spectrum disorders (ASD) show great interest and ease in the use of technology such as tablets and smartphones. There is much research that has been done and is focused on helping users with this type of disorder. However, the challenge is the creation of applications that adapt to their physical, cognitive and motor skills of this type of users. This article focuses on identifying the distance of drag that users with ASD can perform with less complexity, as well as identifying the time that the user with ASD needs to complete the task. The results show that the higher the drag distance, the more complicated this type of user will be. With this result, we can conclude that when to develop mobile applications to support the teaching of this type of users should be considered a smaller drag size and an image size greater than 63 pixels.', '(ARTICULO REVISTA INDEXADA SJR) Keystroke.pdf', 'Keystroke and Pointing.jpg', '21945357', 'New Knowledge in Information Systems and Technologies', 1, 0),
(56, 'ORGANIZATIONAL BEHAVIOR AS A FACTOR OF COMPETITIVENESS IN FAMILY COMPANIES OF THE SERVICE SECTOR IN TIJUANA, B.C., MEXICO', '2019-08-28', 'Organization culture', 'The present study contemplates an investigation to know the relationship that exists between the organizational behavior as the factor of competitiveness in the familiar companies of the service sector in Tijuana, B.C.; the fact that companies have an organizational climate not only benefits the human resource itself but also the company conjointly as it generates profits, while raising the quality of human resources and forging an organization with strengths that position it into the market as a competitive company', '(ARTICULO REVISTA INDEXADA SJR) Organizational.pdf', 'ArticleDefault.jpg', '23956518', 'Humanities and Social Sciences Reviews', 1, 0),
(57, 'Towards a Social Simulator Based on Agents for Management of the Knowledge Base for the Strengthening of Learning Competences', '0000-00-00', 'Computer Science', 'Home Agents and Multi-agent Systems: Technologies and Applications 2019\r\n\r\n    Conference paper \r\n\r\nTowards a Social Simulator Based on Agents for Management of the Knowledge Base for the Strengthening of Learning Competences\r\n\r\n    Consuelo Salgado, Ricardo Rosales, Felipe Lara-Rosano, Sergio Vázquez & Arnulfo Alanis Garza \r\n\r\n    Conference paper\r\n    First Online: 20 June 2019\r\n\r\nPart of the Smart Innovation, Systems and Technologies book series (SIST,volume 148)\r\nAbstract\r\n\r\nIn this article, we present a proposal to develop a simulator based on agents, which allow the detection of student behavior patterns, the curriculum, and the labor sector that make up the environment of the school environment with the work environment. The model describes the relationships and iterations of three agents: Student Agent, Study Plan Agent, Employer Agent, these iterations along with their knowledge base will result in the identification of opportunities and strengthening of learning competencies to incorporate the student in the labor sector before the request of a need or request of the current work environment. The detection and action of these particularities will allow orienting the study plan towards the learning needs and strengthening of the competences in the future graduates of the university and achieve the appropriate insertion in a context based on the knowledge and skills of the labor sector.', '(ARTICULO REVISTA INDEXADA SJR) Towards Social.pdf', 'Towards a Social Simulator Based on Agents for Management of the Knowledge Base for the Strengthening of Learning Competences.jpg', '21903018', 'Agents and Multi-agent Systems: Technologies and Applications 2019', 1, 0),
(58, 'Measurement of Drag Distance of Objects Using Mobile Devices: Case Study Children with Autism', '2020-06-08', 'Technology', 'Today, children with autism show a great interest in using modern technology such as tablets and smartphones. Also they show a kind of skills to operate such devices; however, the set of operators used to interact with these devices were not designed for people with impairments. There is a lot of research that has been done and is focused on helping users with this type of disorder, but a challenge still remains to create applications that adapt to their physical, cognitive and motor skills. This article focuses on identifying the distance of drag that users with autism can perform with less complexity, as well as identifying the time that the user with autism needs to complete the task. The results show that the greater the drag distance, the more complicated this type of user will be. With these results we can recommend to consider smaller drag size and an image size greater than 63 pixels to design and develop mobile applications to support the teaching of autistic users.', '(ARTICULO REVISTA INDEXADA SJR) Measurement.pdf', 'Measurement of Drag Distance of Objects Using Mobile Devices.jpg', '21945357', 'Trends and Innovations in Information Systems and Technologies', 1, 0),
(59, 'Hacia el desarrollo de un modelo para un simulador social computacional como estrategia de apoyo y prevención de las adicciones en tijuana, BC. México', '2020-04-01', 'Computer Science', 'Este trabajo se basa en la recopilación de la información generada en la creación del simulador. Donde este es una propuesta que será utilizada como una herramienta útil para la detección temprana de diversas variantes, factores o elementos que Psicólogos, Psiquiatras o Sociólogos consideran críticos; estos hacen referencia a la prevención y detección de adicciones en diversas etapas de la vida. Este software simulara múltiples eventos y estados que en el presente y en el futuro deseado pueden determinar una tendencia de riesgo hacia las adicciones y en base al resultado detectado, el experto puede realizar la intervención que deberá aplicar medidas correctivas-preventivas, adecuadas y ajustadas, este modelo está orientado hacia un simulador dinámico, multiagente, complejo no lineal, donde los aspectos Biológicos, Psicológico, Social, son plasmados en un modelo computacional con intención de generar un Software que permita un simulador eficiente, eficaz y competitivo en el área estudiada.', '(ARTICULO REVISTA INDEXADA SJR) Simulador.pdf', 'Hacia el desarrollo de un modelo para un simulador social computacional como estrategia de apoyo y prevención de las adicciones en tijuana, BC. México..jpg', '16469895', 'RISTI - Revista Iberica de Sistemas e Tecnologias de Informacao', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_autores`
--

CREATE TABLE `articulos_autores` (
  `id_articulos_autores` int(11) NOT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos_autores`
--

INSERT INTO `articulos_autores` (`id_articulos_autores`, `id_articulo`, `id_autor`) VALUES
(54, 35, 1),
(55, 35, 2),
(56, 35, 7),
(57, 35, 10),
(58, 35, 21),
(59, 36, 1),
(60, 36, 9),
(67, 39, 1),
(68, 39, 2),
(69, 39, 22),
(70, 40, 1),
(71, 40, 7),
(72, 40, 8),
(73, 40, 23),
(74, 40, 2),
(75, 40, 24),
(76, 41, 1),
(77, 41, 2),
(78, 41, 10),
(79, 41, 26),
(80, 41, 27),
(81, 41, 25),
(82, 42, 1),
(83, 42, 3),
(84, 43, 1),
(85, 43, 2),
(86, 43, 7),
(87, 43, 8),
(88, 43, 21),
(89, 43, 23),
(90, 43, 28),
(91, 44, 21),
(92, 44, 7),
(93, 44, 28),
(94, 44, 29),
(95, 44, 1),
(96, 44, 30),
(101, 47, 31),
(102, 47, 28),
(103, 47, 7),
(104, 47, 29),
(105, 47, 1),
(106, 48, 24),
(107, 48, 32),
(108, 48, 33),
(109, 48, 1),
(110, 49, 2),
(111, 49, 1),
(112, 49, 8),
(113, 49, 34),
(114, 50, 26),
(115, 50, 35),
(116, 50, 36),
(117, 50, 1),
(118, 50, 34),
(119, 51, 1),
(120, 51, 10),
(121, 51, 2),
(122, 51, 7),
(123, 51, 21),
(124, 51, 35),
(125, 52, 36),
(126, 52, 1),
(127, 52, 2),
(128, 52, 10),
(129, 52, 37),
(130, 52, 26),
(131, 53, 10),
(132, 53, 8),
(133, 53, 1),
(134, 53, 27),
(135, 53, 37),
(136, 53, 38),
(137, 54, 2),
(138, 54, 26),
(139, 54, 36),
(140, 54, 1),
(141, 55, 35),
(142, 55, 10),
(143, 55, 40),
(144, 55, 1),
(145, 55, 39),
(146, 55, 26),
(147, 56, 32),
(148, 56, 24),
(149, 56, 33),
(150, 56, 1),
(151, 57, 36),
(152, 57, 1),
(153, 57, 8),
(154, 57, 40),
(155, 57, 34),
(156, 58, 35),
(157, 58, 42),
(158, 58, 10),
(159, 58, 1),
(160, 58, 41),
(161, 59, 2),
(162, 59, 8),
(163, 59, 3),
(164, 59, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen_autor` varchar(250) NOT NULL,
  `miembro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `nombre`, `apellido`, `descripcion`, `imagen_autor`, `miembro`) VALUES
(1, 'Ricardo Fernando', 'Rosales Cisneros', 'A Mich le encanta afrontar desafíos. La dilatada experiencia que Mich atesora como director comercial en la industria del software ha posibilitado que la empresa goce de la posición que ostenta actual', 'Rosales Cisneros_IMAGEN.png', 1),
(2, 'Nora del Carmen', 'Osuna Millan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', 'Nora.jpeg', 1),
(3, 'Juan Antonio', 'Meza Fregoso', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', 'Juan.jpeg', 1),
(7, 'Manuel', 'Castañon Puga', 'l', '', 0),
(8, 'Felipe', 'Lara Rosano', '', '', 0),
(9, 'Donald', 'Rodriguez', '', '', 0),
(10, 'Margarita', 'Ramirez Ramirez', '', '', 0),
(21, 'Miguel', 'Flores Parra', '', 'defaultprofile.png', 0),
(22, 'Edgar', 'Jiménez Cerra', '', 'defaultprofile.png', 0),
(23, 'Richard David ', 'Evans', '', 'defaultprofile.png', 0),
(24, 'Maria Virginia', 'Flores Ortiz', '', 'defaultprofile.png', 0),
(25, 'Miguel Antonio', 'Osuna Millán', '', 'defaultprofile.png', 0),
(26, 'Maricela', ' Sevilla Caro', '', 'defaultprofile.png', 0),
(27, 'Esperanza ', 'Manrique Rojas', '', 'defaultprofile.png', 0),
(28, 'Carelia', 'Gaxiola Pacheco', '', 'defaultprofile.png', 0),
(29, 'Luis Enrique', 'Palafox Maestre', '', 'defaultprofile.png', 0),
(30, 'Aldredo ', 'Tirado Ramos', '', 'defaultprofile.png', 0),
(31, 'Karina ', 'Raya Diaz', '', 'defaultprofile.png', 0),
(32, 'Alfonso', 'Vega López', '', 'defaultprofile.png', 0),
(33, 'Edgar Armando', 'Chávez Moreno', '', 'defaultprofile.png', 0),
(34, 'Arnulfo', 'Alanis Garza', '', 'defaultprofile.png', 0),
(35, 'Ángeles', 'Quezada', '', 'defaultprofile.png', 0),
(36, 'Consuelo', 'Salgado', '', 'defaultprofile.png', 0),
(37, 'Hilda Beatriz', 'Ramírez Moreno', '', 'defaultprofile.png', 0),
(38, 'Gonzalo', 'Maldonado Guzmán', '', 'defaultprofile.png', 0),
(39, 'Samantha', 'Jiménez', '', 'defaultprofile.png', 0),
(40, 'Sergio Octavio ', 'Vázquez', '', 'defaultprofile.png', 0),
(41, 'Carlos', 'Hurtado', '', 'defaultprofile.png', 0),
(42, 'Reyes', 'Juárez Ramírez', '', 'defaultprofile.png', 0),
(43, 'Cipriano Domingo', 'Coronado Garcia', '', 'defaultprofile.png', 0),
(44, 'Virginia Guadalupe', 'Lopes Torres', '', 'defaultprofile.png', 0),
(45, 'Sandra Julieta', 'Saldivar Gonzales', '', 'defaultprofile.png', 0),
(46, 'Luis Ramon', 'Moreno Moreno', '', 'defaultprofile.png', 0),
(47, 'Eduardo', 'Ahumada Tello', '', 'defaultprofile.png', 0),
(48, 'Jorge Ines', 'Morales Garfias', '', 'defaultprofile.png', 0),
(49, 'Robert Efrain', 'Zarate Cornejo', '', 'defaultprofile.png', 0),
(50, 'Carlos Alberto', 'Flores Sanchez', '', 'defaultprofile.png', 0),
(51, 'Martha Ofelia', 'Lobo Rodriguez', '', 'defaultprofile.png', 0),
(52, 'Isaac', 'Cruz Estrada', '', 'defaultprofile.png', 0),
(53, 'Ma Enselmina', 'Marin Vargas', '', 'defaultprofile.png', 0),
(54, 'Ma. del Carmen', 'Alcala Alvarez', '', 'defaultprofile.png', 0),
(55, 'Veronica Guadalupe ', 'De la O Burrola', '', 'defaultprofile.png', 0),
(56, 'Clementina E.', 'Garcia Martinez', '', 'defaultprofile.png', 0),
(57, 'Jose de Jesus', 'Moreno Neri', '', 'defaultprofile.png', 0),
(58, 'Lizzette', 'Velasco Aulcy', '', 'defaultprofile.png', 0),
(59, 'Nancy Imelda', 'Montero Delgado', '', 'defaultprofile.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_evento` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre`, `fecha_inicio`, `fecha_final`, `lugar`, `descripcion`, `imagen_evento`) VALUES
(11, '1er. Coloquio Internacional de Investigación aplicada a la mercadotecnia', '2017-11-27', '2017-12-01', 'FCA', 'Análisis de la implementación de estrategias de marketing en la MiPyMes de Baja California.', '1er. Coloquio Internacional de Investigación aplicada a la mercadotecnia.jpg'),
(12, 'VI Foro de Actualización Profesional', '2017-09-27', '2017-09-29', 'FCA', 'VI Foro de Actualización  Profesional, dirigido a los futuros profesionistas de esta facultad.', 'VI Foro de Actualización Profesional.jpg'),
(16, '1er. Congreso Internacional de Investigación aplicada a la mercadotecnia', '2018-11-28', '2018-11-30', 'FCA y Videoconferencia', 'Colaboración en la organización de las actividades.', '1er. Congreso Internacional de Investigación aplicada a la mercadotecnia.jpg'),
(17, '1er Jornada Internacional de Investigación', '2018-04-30', '2018-05-04', 'FCA', '1er Jornada Internacional de Investigación 2018, dirigido a estudiantes  de licenciatura de la FCA.', '1er Jornada Internacional de Investigación.jpg'),
(18, 'Semana Nacional de Actualización Docente', '2018-08-20', '2018-08-24', 'FCA', 'Semana Nacional de Actualización Docente 2018, en el área de Telecomunicaciones y Conectividad, dirigido a los docentes de las IES afiliadas a ANFECA', 'Semana Nacional de Actualización Docente.jpg'),
(19, 'XXXIII Semana de la Contaduría Pública', '2018-09-17', '2018-09-21', 'Tijuana, BC', '', 'XXXIII Semana de la Contaduría Pública.jpg'),
(20, 'VIII Foro Internacional de Actualización Profesional', '2019-09-25', '2019-09-29', 'FCA', 'VIII Foro Internacional de Actualización Profesional, dirigido a los futuros profesionistas de esta Facultad.', 'VIII Foro Internacional de Actualización Profesional.jpg'),
(21, 'Maraton Regional de Conocimiento ANFECA 2019', '2019-04-11', '2019-04-12', 'FCA', 'Maratón Regional Zona I Noroeste: Fiscal, Finanzas, Administración, Informática Administrativa, Mercadotecnia y Negocios Internacionales', 'Maraton Regional de Conocimiento ANFECA 2019.jpg'),
(22, 'Quinto Coloquio Estatal', '2020-05-27', '2020-05-28', 'Videoconferencia', 'La maestría de Gestión de Tecnologías de la información y comunicación presenta un espacio para el conocimiento y difusión de los Proyectos Terminales de los estudiantes del programa.', 'Quinto Coloqui Estatal.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_autores`
--

CREATE TABLE `eventos_autores` (
  `id_eventos_autores` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos_autores`
--

INSERT INTO `eventos_autores` (`id_eventos_autores`, `id_autor`, `id_evento`) VALUES
(19, 2, 11),
(20, 2, 12),
(24, 1, 11),
(25, 2, 16),
(26, 1, 16),
(27, 2, 17),
(28, 1, 17),
(29, 1, 18),
(30, 2, 18),
(31, 2, 19),
(32, 1, 12),
(33, 1, 20),
(34, 2, 20),
(35, 1, 21),
(36, 2, 21),
(37, 1, 22),
(38, 2, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigaciones`
--

CREATE TABLE `investigaciones` (
  `id_investigacion` int(11) NOT NULL,
  `clave` int(11) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `periodo_inicio` int(11) NOT NULL,
  `anio_inicio` year(4) NOT NULL,
  `periodo_fin` int(11) NOT NULL,
  `anio_fin` year(4) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `url_descarga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `investigaciones`
--

INSERT INTO `investigaciones` (`id_investigacion`, `clave`, `titulo`, `periodo_inicio`, `anio_inicio`, `periodo_fin`, `anio_fin`, `descripcion`, `url_descarga`) VALUES
(13, 0, 'ANÁLISIS DE LAS CAPACIDADES TECNOLÓGICAS DE LAS MICRO Y PEQUEÑAS EMPRESAS  QUE PERMITAN LA ADOPCIÓN E IMPLEMENTACIÓN ADECUADA DE UN SISTEMA DE INFORMACIÓN  AUTOMATIZADO: SECTOR SERVICIOS EN BAJA CALIFORNIA', 2, '2019', 1, '2021', '', 'analisis de las capacidades.pdf'),
(14, 301, 'EL APRENDIZAJE ORGANIZACIONAL Y LA ADMINISTRACIÓN DE LA FUNCIÓN INFORMATICA EN LA EMPRESA', 1, '2019', 2, '2019', '', 'Aprendizaje Organizacional-AFI.pdf'),
(15, 300, 'CITY SANDBOX 1.0: SISTEMA EN LINEA DE PARTICIPACIÓN CIUDADANA PARA LA PLANEACIÓN DEMOCRÁTICA DE LAS CIUDADES', 2, '2019', 1, '2021', '', 'City SandBox.PDF'),
(16, 301, 'ESTRATEGIAS TECNOLÓGICAS EN EL USO DE LOS SISTEMAS DE INFORMACIÓN', 1, '2019', 2, '2020', '', 'Estrategias Tecnologicas.pdf'),
(17, 301, 'ANÁLISIS DE OPORTUNIDADES Y MEJORAS DE LAS COMPETENCIAS DE APRENDIZAJE A NIVEL  LICENCIATURA, DESDE LA PERSPECTIVA DE SISTEMAS COMPLEJOS', 1, '2019', 2, '2020', '', 'simulador Competencias LI.pdf'),
(18, 301, 'SIMULADOR DE PROCESOS DE GESTIÓN DE LA COMPETITIVIDAD DE UN DOCENTE UNIVERSITARIO COMO BASE DE CONOCIMIENTO PARA LA EDUCACIÓN UNIVERSITARIA DE CALIDAD', 1, '2019', 2, '2020', '', 'Simulador Competitividad.pdf'),
(19, 0, 'SIMULADOR DE PROCESOS DE GESTIÓN DE LA INNOVACIÓN COMO BASE DE CONOCIMIENTO PARA LA  EDUCACIÓN E INVESTIGACIÓN', 2, '2016', 2, '2017', '', 'Simulador Educacion e Investigacion N.pdf'),
(20, 301, 'SIMULADOR SOCIAL PARA IDENTIFICACIÓN DE CARACTERÍSTICAS Y TIPOS DE PERSONALIDAD Y SU RELACIÓN EN EL PROCESO DE MOTIVACIÓN', 1, '2019', 2, '2020', '', 'Simulador Personalidad.pdf'),
(21, 0, 'SIMULADOR SOCIAL PARA PREDICCIÓN Y PREVENCIÓN DE ADICCIONES', 2, '2018', 1, '2020', '', 'Simulador Prediccion N.pdf'),
(22, 301, 'ESTUDIO DE LOS SISTEMAS DE INFORMACIÓN APLICADOS A REDES SOCIALES EN TIJUANA', 1, '2020', 2, '2021', '', 'ESTUDIOS SI SOCIAL 20-21.pdf'),
(23, 301, 'DETECCION DE FORTALEZAS Y AREAS DE OPORTUNIDAD DE LOS ALUMNOS  QUE SUSTENTAN EL EXAMEN GENERAL DE EGRESO DE LA LICENCIATURA EN INFORMATICA, EN LA FACULTAD DE CONTADURÍA Y ADMINISTRACIÓN TIJUANA', 2, '2015', 2, '2016', '', 'Deteccion de fortalezas y areas de oportunidad.pdf'),
(24, 0, 'PROPUESTA DE CREACIÓN DEL CLUSTER GASTRONÓMICO COMO ESTRATEGIA PARA FOMENTAR LA INNOVACIÓN EN LA INDUSTRIA', 2, '2016', 2, '2017', '', 'Propuesta de creacion del cluster gastronomico.pdf'),
(25, 301, 'CAPACIDADES TECNOLÓGICAS DEL BIT CENTER', 2, '2015', 2, '2016', '', 'CAPACIDADES TECNOLÓGICAS DEL BIT CENTER.pdf'),
(26, 0, 'FACTORES REGIONALES QUE DETERMINAN EL EMPRENDIMIENTO Y CRECIMIENTO DE LAS PYMES EN AMÉRICA LATINA. EL CASO DE MÉXICO Y COLOMBIA', 1, '2015', 2, '2017', '', 'FACTORES REGIONALES QUE DETERMINAN EL EMPRENDIMIENTO Y CRECIMIENTO DE LAS.pdf'),
(27, 301, 'POSICIONAMIENTO DEL BIT CENTER EN LA REGIÓN', 2, '2015', 2, '2016', '', 'POSICIONAMIENTO DEL BIT CENTER EN LA REGIÓN.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigaciones_autores`
--

CREATE TABLE `investigaciones_autores` (
  `id_investigaciones_autores` int(11) NOT NULL,
  `id_investigacion` int(11) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `asociado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `investigaciones_autores`
--

INSERT INTO `investigaciones_autores` (`id_investigaciones_autores`, `id_investigacion`, `id_autor`, `asociado`) VALUES
(24, 13, 1, 0),
(25, 13, 43, 1),
(26, 13, 44, 1),
(27, 13, 45, 1),
(28, 13, 3, 1),
(29, 13, 46, 1),
(30, 13, 2, 1),
(31, 14, 26, 0),
(32, 14, 36, 1),
(33, 14, 2, 1),
(34, 14, 47, 1),
(35, 14, 48, 1),
(36, 15, 7, 0),
(37, 15, 28, 1),
(38, 15, 29, 1),
(39, 15, 1, 1),
(40, 15, 2, 1),
(41, 16, 10, 0),
(42, 16, 48, 1),
(43, 16, 2, 1),
(44, 16, 27, 1),
(45, 17, 36, 0),
(46, 17, 1, 1),
(47, 17, 2, 1),
(48, 17, 10, 1),
(49, 17, 37, 1),
(50, 17, 26, 1),
(51, 17, 48, 1),
(52, 18, 2, 0),
(53, 18, 1, 1),
(54, 18, 36, 1),
(55, 18, 10, 1),
(56, 18, 37, 1),
(57, 18, 27, 1),
(58, 18, 26, 1),
(59, 19, 1, 0),
(60, 19, 3, 1),
(61, 19, 7, 1),
(62, 19, 10, 1),
(63, 19, 2, 1),
(64, 20, 10, 0),
(65, 20, 27, 1),
(66, 20, 37, 1),
(67, 20, 36, 1),
(68, 20, 1, 1),
(69, 20, 48, 1),
(70, 20, 2, 1),
(71, 21, 1, 0),
(72, 21, 3, 1),
(73, 21, 2, 1),
(74, 22, 48, 0),
(75, 22, 37, 1),
(76, 22, 26, 1),
(77, 22, 10, 1),
(78, 22, 36, 1),
(79, 22, 1, 1),
(80, 22, 49, 1),
(81, 23, 37, 0),
(82, 23, 26, 1),
(83, 23, 36, 1),
(84, 23, 48, 1),
(85, 23, 1, 1),
(86, 23, 50, 1),
(87, 23, 2, 1),
(88, 23, 27, 1),
(89, 23, 10, 1),
(90, 23, 3, 1),
(91, 24, 3, 0),
(92, 24, 52, 1),
(93, 24, 3, 1),
(94, 24, 51, 1),
(95, 25, 36, 0),
(96, 25, 3, 1),
(97, 25, 2, 1),
(98, 25, 50, 1),
(99, 25, 10, 1),
(100, 25, 1, 1),
(101, 26, 53, 0),
(102, 26, 46, 1),
(103, 26, 44, 1),
(104, 26, 54, 1),
(105, 26, 55, 1),
(106, 26, 56, 1),
(107, 27, 59, 0),
(108, 27, 50, 1),
(109, 27, 1, 1),
(110, 27, 2, 1),
(111, 27, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libros` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `fecha_publicacion` date NOT NULL,
  `url_descarga` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `isbn` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `titulo`, `descripcion`, `categoria`, `fecha_publicacion`, `url_descarga`, `imagen`, `isbn`, `editorial`) VALUES
(18, 'Modelo de Interacción basado en Agentes BDI con Percepciones Difusas', 'El modelo de interacción hace uso de agentes con percepciones difusas que tratan la incertidumbre y la imprecisión emergente, con el fin de aprender el comportamiento de las personas y controlar el ambiente pervasivo adecuándolo a las preferencias de las mismas, así mismo el modelo permite tener una interacción más eficiente minimizando errores, incrementando la satisfacción, disminuyendo la frustración y en definitiva, hace más productivas las tareas que rodean a las personas.', 'Informatica', '2017-09-19', 'Modelo-de-Interacción.pdf', 'Modelo de Interaccion.jpg', '9786202240550', 'Editorial Académica Española');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_autores`
--

CREATE TABLE `libros_autores` (
  `id_libros_autores` int(11) NOT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros_autores`
--

INSERT INTO `libros_autores` (`id_libros_autores`, `id_libro`, `id_autor`) VALUES
(42, 18, 1),
(43, 18, 7),
(44, 18, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulos`);

--
-- Indices de la tabla `articulos_autores`
--
ALTER TABLE `articulos_autores`
  ADD PRIMARY KEY (`id_articulos_autores`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `eventos_autores`
--
ALTER TABLE `eventos_autores`
  ADD PRIMARY KEY (`id_eventos_autores`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  ADD PRIMARY KEY (`id_investigacion`);

--
-- Indices de la tabla `investigaciones_autores`
--
ALTER TABLE `investigaciones_autores`
  ADD PRIMARY KEY (`id_investigaciones_autores`),
  ADD KEY `id_investigacion` (`id_investigacion`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`);

--
-- Indices de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD PRIMARY KEY (`id_libros_autores`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_autor` (`id_autor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `articulos_autores`
--
ALTER TABLE `articulos_autores`
  MODIFY `id_articulos_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `eventos_autores`
--
ALTER TABLE `eventos_autores`
  MODIFY `id_eventos_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  MODIFY `id_investigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `investigaciones_autores`
--
ALTER TABLE `investigaciones_autores`
  MODIFY `id_investigaciones_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  MODIFY `id_libros_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos_autores`
--
ALTER TABLE `articulos_autores`
  ADD CONSTRAINT `articulos_autores_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id_articulos`),
  ADD CONSTRAINT `articulos_autores_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`);

--
-- Filtros para la tabla `eventos_autores`
--
ALTER TABLE `eventos_autores`
  ADD CONSTRAINT `eventos_autores_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`),
  ADD CONSTRAINT `eventos_autores_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id_evento`);

--
-- Filtros para la tabla `investigaciones_autores`
--
ALTER TABLE `investigaciones_autores`
  ADD CONSTRAINT `investigaciones_autores_ibfk_1` FOREIGN KEY (`id_investigacion`) REFERENCES `investigaciones` (`id_investigacion`),
  ADD CONSTRAINT `investigaciones_autores_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`);

--
-- Filtros para la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD CONSTRAINT `libros_autores_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libros_autores_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
