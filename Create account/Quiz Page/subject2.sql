CREATE TABLE subject2 (
Question_no int(5),
Question varchar(400),
option1 varchar(200),
option2 varchar(200),
option3 varchar(200),
option4 varchar(200),
correct_option1 tinyint(1),
correct_option2 tinyint(1),
correct_option3 tinyint(1),
correct_option4 tinyint(1)
);



/*INSERT INTO Subject2 VALUES (question_number, question, option1, option2, option3, option4, correct_option1, correct_option2, correct_option3, correct_option4);  */

INSERT INTO Subject2 VALUES (1, "How many diagrams are here in Unified Modelling Language?"," six","seven","eight","nine",0,0,0,1);

INSERT INTO Subject2 VALUES (2 ,"___________ are statements that can be interpreted in a number of ways.","Contradictions","Ambiguities","Vagueness","Comments",1,0,0,0);

INSERT INTO Subject2 VALUES (3,"What defines the circumstances in which a particular operation is valid?","Contradictions","Post-condition","Vagueness","None of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(4,"Which of the following is a way of making a statement about the elements of a set that is true for every member of the set?","Set","Sequence","Universal quantification","Both Set and Sequence",0,0,1,0);

INSERT INTO Subject2 VALUES(5,"Which of the following occurs often due to the bulkiness of a system specification document?","Contradictions","Ambiguities","Vagueness"," Incompleteness",0,0,1,0);

INSERT INTO Subject2 VALUES(6,"The _________ of a formal specification language is often based on a syntax that is derived from standard set theory notation and predicate calculus.","semantic domain","syntactic domain","sequence","set",0,1,0,0);

INSERT INTO Subject2 VALUES(7,"Which of the following provides a concise, unambiguous, and consistent method for documenting system requirements?","CMM","ISO-9001","CASE tools","Formal methods",0,0,0,1);

INSERT INTO Subject2 VALUES(8,"The ____________ of a specification language indicates how the language represents system requirements.","semantic domain","syntactic domain"," sequence","set",1,0,0,0);

INSERT INTO Subject2 VALUES(9,"Which of the following is essential for success, when formal methods are used for the first time?","Expert training","Consulting","Prerequisite knowledge","Both Expert training and Consulting",0,0,0,1);

INSERT INTO Subject2 VALUES(10,"It is generally not necessary to apply formal methods to every aspect of a major system.","True","False","Both a and b","None of the above",1,0,0,0);

INSERT INTO Subject2 VALUES(11,"Which of these truly defines Software design?","Software design is an activity subjected to constraints","Software Design specifies nature and composition of software product","Software Design satisfies client needs and desires","All of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(12,"Which of the following statement is false?","A process is a collection of related tasks that transforms a set of inputs to the set of output","A design notation is a symbolic representational system","A design heuristic is a rule proceeding guidance","with guarantee for achieving some end","Software design method is orderly procedure for providing software design solutions",0,1,0,0);

INSERT INTO Subject2 VALUES(13,"Which of these describes stepwise refinement?","Nicklaus Wirth described the first software engineering method as stepwise refinement","Stepwise refinement follows its existence from 1971","It is a top down approach","All of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(14,"What is incorrect about structural design?","Structural design introduced notations and heuristics","Structural design emphasis on procedural decomposition","The advantage is data flow representation","It follows Structure chart",0,0,1,0);


INSERT INTO Subject2 VALUES(15,"What is the solution for Structural design?,a) The specification model following data flow diagram,b) Procedures represented as bubbles,c) Specification model is structure chart showing procedure calling hierarchy and flow of data in and out of procedures,d) Emphasizing procedural decomposition",0,0,1,0);

INSERT INTO Subject2 VALUES(16, "Which of these are followed by the latest versions of structural design?","More detailed and flexible processes","Regular Notations","Wide support by CASE(Computer Aided Software Engineering)","Wide support by CASE","More detailed and flexible processes",0,0,0,1);

INSERT INTO Subject2 VALUES(17, "Which of the following is an incorrect method for structural design?","Transition of problem models to solution models","Handling of larger and more complex products","Designing Object oriented systems","More procedural approach",0,1,0,0);

INSERT INTO Subject2 VALUES(18,"What is followed by the design task?","Choosing specific classes, operations","Checking model’s completeness","Following design task heuristics","All of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(19,"Which of this analysis are not acceptable?","Object oriented design is a far better approach compared to structural design","Object oriented design always dominates structural design","Object oriented design are given more preference than structural design","Object oriented uses more specific notations",0,1,0,0);

INSERT INTO Subject2 VALUES(20,"Which of these does not represent object oriented design?","It follows regular procedural decomposition in favor of class and object decomposition","Programs are thought of collection of objects","Central model represents class diagrams that show the classes comprising a program and their relationships to one another","Object-oriented methods incorporates Structural methods",1,0,0,0);

INSERT INTO Subject2 VALUES(21,"Which of the following examples is/are models of application architectures?"," a means of assessing components for reuse","a design checklist","a vocabulary for talking about types of applications","all of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(22,"ERP stands for","Enterprise Research Planning","Enterprise Resource Planning"," Enterprise Resource Package","Enterprise Research Package",0,1,0,0);

INSERT INTO Subject2 VALUES(23,"Which of the following type describes application architectures?","Transaction processing applications","Language processing systems","Client management systems","Transaction processing applications and Language processing systems",0,0,0,1)

INSERT INTO Subject2 VALUES(24,"All the operations in a transaction need to be completed before the database changes are made ________"," functional","available to the users","permanent","none of the mentioned",0,1,0,0);

INSERT INTO Subject2 VALUES(25,"Systems that involve interaction with a shared database can be considered as.","software-based","transaction-based","server-based","client-based",0,1,0,0);

INSERT INTO Subject2 VALUES(26,"What translates a natural or an artificial language into another representation of that language and, for programming languages also execute the resulting code?","ERP systems"," Transaction-based information systems","Language processing systems","None of the mentioned",0,0,1,0);

INSERT INTO Subject2 VALUES(27,"Properties of a system such as performance and security are independent of the architecture used.","True","False","Not defined","None of above",0,1,0,0);

INSERT INTO Subject2 VALUES(28,"Which of the following is/are commonly used architectural pattern(s)?"," Model-View-Controller","Layered Architecture","Client–server","All of the mentioned",0,0,0,1);

INSERT INTO Subject2 VALUES(29,"A language-processing systems may translate an XML data description into","a machine code","an alternative XML representation"," machine code and alternative XML representation","a software module",0,0,1,0);

INSERT INTO Subject2 VALUES(30,"Transaction processing systems may be organized as a _________ architecture with system components responsible for input, processing, and output.","Repository","Client–server","Model-View-Controller","Pipe and Filter",0,0,0,1);