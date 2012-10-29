Project Hosting:
-----------------

**Github**: <https://github.com/furtherLee>  
I host most of my independent projects on Github. I love the idea of social coding.

**Bitbucket**: <https://bitbucket.org/furtherLee>  
Bitbucket provides unlimited private repositories. Therefore I host projects in secret status here, including projects in HP internship and my laboratory.

**ACM-Class Git**: <http://giti.me/>  
This is a project hosting website built in our ACM Honored Class. We host our course projects here, where is not accessible to the outside, since we must prevent other students in ACM Honored Class steal code. (Such situations have happened many times, making very bad impact.).
Notions

You can get access to the link I mentioned after the title to have a better overview about each project, including the motivation, the design and the architecture.

Course Project (All hosted on ACM-Class Git)
--------------------------------------------

### Library Management System

This is a project for our C++ programming course. We are requested to design and implement a library management system using C++ with totally freedom. I decide to add GUI on my system, so I choose MFC as framework. In spite of finishing all requirements, I add miscellaneous functions such as encrypting password, a small database based on file etc.

### Tiger

Tiger is a compiler course project. We are requested to design and implement a compiler for Language Tiger. All aspects of a compiler are required, including syntax and semantics checking, generating intermediate representation, target code generation, register allocation and optimization. I am one of the four who use quadruples instead of tree representation, which is recommended by the textbook. Furthermore, I use linear scan to replace graph coloring in register allocation. I implement several optimizations, such as DAG, loop unrolling, constant folding, and peephole etc.

### MIPS

The goal of our project is to design a pipelined, cached processor with some advanced modules written in verilog. I finished a 5-level pipelined processor, with an invention of myself to eliminate blank instructions after a branch or jump. After that, there is an experiment of SIMICS. In SIMICS, I wrote 4 technical reports about how processor, cache, virtual memory varied with parameters in performance. 

###Nachos

Link: <http://acm-project.org/courses/cs376/fa11>  
The project for this course is to build an operating system from scratch. It has several phases, corresponding to the major pieces of a modern operating system: thread management, multiprogramming, virtual memory, file system, networking, etc. It was written in Java. 

### TeNet

Link: <http://acm-project.org/courses/cs379/fa11>  
Tenet is a network simulator which is designed and coded by TAs. This course will use Tenet to teach the students how to implement networking protocols. Currently there are 4 phases in this course: ARP & L2 Switch, IP, TCP and Dynamic Routing. As a basic experimental course, Tenet will focus on some of the basic functionalities of the above protocols. I was the only one who finished all tasks and help TAs to test framework and test cases. I earned full scores in this project. 

### Fatworm

Link: <http://acm-project.org/fatworm/>  
Fatworm is DBMS design and implementation course of ACM Honored Class, SJTU. All the student teams are required to support a subset of SQL language similar to MYSQL, and query execution and optimization is encouraged as advanced topic. I am in a group with Jia Xiao. We fully finished the requirements, including parsing SQL, generating logic plans and scans, making indices, and storage. Furthermore we optimized on indices and logic algebra representation to accelerate query execution. 

### GoGoGo

One of our AI course projects is to design intelligent agent for computer go. I was in a group with Jia Xiao. Our intelligent agent is called GoGoGo. We design an algorithm framework consists of phases and filters. Each filter is part of an algorithm, such as patterns (the most useful), power, UCT.

### JavaC

I was a teaching assistant in the compiler project course (Formerly Tiger). Tiger is well documented and leaks some complete code due to the long history of such a course project in ACM Honored Class. This caused many students trying to steal code from internet. Therefore we decide to design a new language for younger schoolfellows. This language is like C and Java, so it is called JavaC, but only a simpler version. We ignore all kinds of pointers, remove sophisticated keywords like register, static, synchronized, etc. All parameters are reference, as well as no global variables are allowed. The speculation can be accessed via http://acm-project.org/compiler/. The target language is MIPS.

### Access Framework for OO Course

Link: <https://github.com/furtherLee/acm-project.OO.accessframework>  
This is a module of an application of internet of things. This application is proposed in our Object Oriented Analysis and Design course. The whole project is divided into 9 groups, each is responsible for one module. Qujun and I are designing two access frameworks for EPICS and CRS respectively. It is based on open source project Fosstrak. We provide a SOAP and RESTFUL(in fact, binding on SOAP) web service. We use guice for dependency injection, jersey for restful service.

Independent Project
---------------------

### Paike

Link: <https://github.com/furtherLee/paike>  
Paike is a project proposed by Li Shijian as a course project of Web Design in Shanghai Jiaotong University. The project targets to provide a portable and flexible way for managers of clubs to assign different jobs.  I use flourish, slim, twig, mustache, bootstrap, jQuery to finish this website.

### pptdemo

Link: <https://github.com/furtherLee/pptdemo>  
This is a simple demo about how to build a dynamic website with PHP. It illustrates some basic ideas about routing, MVC, and templates.  The demo is about a website sharing jokes, which is simple and enough for a 30 minutes presentation. I think a beginner can learn much from it.

### E3GTP

Link: <https://github.com/furtherLee/e3gtp>  
In AI course, we are required to design and implement an agent to play GO with each other. In the stage of preparation, we are suggested to use a mature GTP engine in C implementation. However, I'm eggache. I started to search whether there is a java version. Finally, I was frustrated that, such a thing I have ever found is not Open Source! So I decided to implement one ^ ^.

### wpa_supplicant_demo

Link: <https://github.com/furtherLee/wpa_supplicant_demo>  
This project is a demo for roaming in a hotspot 2.0 capable environment. I implement this demo on a PC in two parts, including auto roaming in wpa_supplicant and a user client with Qt4. The client will retrieve all ANQP information from access points, and do an algorithm like filters to select the most suitable AP to associate. After Disconnect event occurs, the client will automatically use ANQP information to roam to another AP without loss of connection.

### cmrecorder
Link: <https://github.com/furtherLee/cmrecorder>  
This is a utility to calculate CPU and memory usage for specific processes during a period of time. It is useful when you need to record these parameters for performance analysis in experiments. Especially, when there are multiple processes you need to record simultaneously, you can just specify the command name or pids. Then, the overall statistics will be generated by adding all up. It uses /proc filesystem to fetch usage information periodically. For instance, I retrieve CPU time information in /proc/:pid/stat and memory usage in /proc/:pid/statm.

### depcalc

Link: <https://github.com/furtherLee/depcalc>  
Well it is just a tool to calculate functional dependency. In the day I was calculating a dependency, I found out that it is too hard to find all. So I decided to write a program for this work. I found 250+ dependency!!! So I wrote all of them. However, the next day, my teaching assistant said, only some is enough.

### furtherlee.github.com

Link: <https://github.com/furtherLee/furtherlee.github.com>  
A personal blog based on Jekyll. I write some personal experience, interested books and affairs in communities. Well, it is only Chinese version, and the URL is <http://blog.lishijian.com/>.

### further-site

Link: <https://github.com/furtherLee/further-site>  
A personal website built for me. I only write simple PHP scripts to give information about myself and something I am interested in. All pages are guilt from markdown through rdiscount. It also records useful books and tools I have found to share with others.

### aosabook-zh

Link: <https://github.com/furtherLee/aosabook-zh>  
The book Architecture of Open Source Applications is one of the greatest books I have ever seen. Thus I decided to translate it from English to Chinese with a good friend of mine. However, we found a community called iTuring (http://www.ituring.com.cn/minibook/19) has started a project to translate it. Therefore, we join the community, and choose topics we are interested in to translate. I have translated chapter Moodle(http://www.ituring.com.cn/article/9966), and still is trying to translate some other chapters. 

### CDrift (private)

Link: <https://github.com/furtherLee/CDrift>  
This is an ongoing project with Professor Zou in Shanghai Jiaotong University. It resolves the problem of losing security attributes when migrating files between different platforms. It includes a web service and clients on different platforms, to enable user transformation and security integrate check. The name means Cloud Drift, which indicates this project targets to create another value-added service on cloud. 

### wpa_supplicant_attacker (private)  

Link: <https://bitbucket.org/furtherLee/wpa_supplicant_lsj>  
It is a research topic in HP Labs China. My mentor and I found some attacking points exist in GAS protocol. So I implement an attacker based on wpa_supplicant, which can flood large home_realm_list queries to access points. A bad designed implementation of Hotspot 2.0 (Both implementation by HP and QualComm) will soon run out of memory and deny all GAS queries. Furthermore, it can monitor on a specific channel and receive all GAS frames, and then fake them to disturb others.

### attacker-tester (private)

Link: <https://bitbucket.org/furtherLee/attacker-tester>  
These are small scripts written in Lua and PHP. A script is responsible for deploying my attacker binaries and normal wpa_supplicant binaries to target machines, according to the configuration (‘config.lua’). Then a script starts to run all scheduled experiments on different machines. They will retrieve data from experimental machines in HP Labs China after an attack. Then a statistics script will generate useful statistics from the raw results. After all, another script draws datagrams from the statistics using gnuplot.

### gas-reaper

Link: <https://github.com/furtherLee/gas-reaper>  
GAS reaper is a tool to block all GAS communication, It will monitor a specific channel to make this channel GAS silent. When received a GAS initial request, it will soon transmit a fake GAS intial response to mislead the requesting station that the target AP cannot access to advertisement server. As the protocol suggests, it may soon kill the GAS dialog with a FAIL notification.

### probe-req-flood

Link: <https://github.com/furtherLee/probe-req-flood>  
This is a small tool to generate a probe request flood on a given channel. It is expecetd that, it can totally block all APs with heavy IO if 802.11w protection not applied. It is based on libnl.

### Lianke

Link: <http://www.lianlianke.com>  
Lianke is an entrepreneurial project proposed by one of my seniors. It aims to provide great experience within a city and sharing with others. I was encouraged by my senior, and participated as a foreground designer for two months. I implement a fancy schedule calendar, a notification system and several widgets. 

Miscellaneous
--------------

You may find other projects on my project hosts. 
