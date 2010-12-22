<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>Robert Bohn | Portfolio</title>
<meta name="DESCRIPTION" content="Robert Bohn - Computer Programmer, Analyst, Webmaster with over twenty years of systems design and application development experience. Specializing in new product development from conception to implementation. Experienced with web site design, object oriented programming, relational database design, graphical user interface design, and Internet application development." />
<meta name="KEYWORDS" content="Robert Bohn,bohn,consulting,consultant,computer,internet,web,programmer,analyst,webmaster,C,C++,PHP,ASP,VB,Visual Basic,C#,VB.NET,ASP.NET,PSQL,JavaScript,SQL Server,Oracle,MySQL,InterBase,Borland" />
<meta name="ROBOTS" content="INDEX,FOLLOW" />
<link href="Global.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" type="image/ico" href="favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/RobertBohn?format=XML" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19225841-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>

<div id="Header">
  <img id="Logo" src="images/robertbohn.gif" alt="" />
  <div><a href="index.html"><img src="images/home.gif" alt="" /></a><p><a href="index.html">Home</a></p></div>
  <div><a href="resume.html"><img src="images/resume.gif" alt="" /></a><p><a href="resume.html">Resume</a></p></div>
  <div><a href="portfolio.php"><img src="images/portfolio.gif" alt="" /></a><p><a href="portfolio.php">Portfolio</a></p></div>
  <div><a href="contact.html"><img src="images/contact.gif" alt="" /></a><p><a href="contact.html">Contact</a></p></div>
</div>

<div id="Content">
    <div id="Menu">
        <ul>
            <li><p>Portfolio</p></li>
            <li><a href="portfolio.php?webapps">Mobile Apps</a></li>
            <li><a href="portfolio.php?iphone">iPhone Apps</a></li>
            <li><a href="portfolio.php?tripres">TripRes.com</a></li>
            <li><a href="portfolio.php?sportsbook">Sportsbook</a></li>
            <li><a href="portfolio.php?bully">Bully Bully</a></li>
            <li><a href="portfolio.php?mocca">Mocca</a></li>
            <li><a href="portfolio.php?cyberbingo">CyberBingo</a></li>
            <li><a href="portfolio.php?tellsafe2">TellSafe II</a></li>
            <li><a href="portfolio.php?tellsafe">TellSafe</a></li>
            <li><a href="portfolio.php?playp2p">PlayP2P</a></li>
            <li><a href="portfolio.php?jockeymania">JockeyMania</a></li>
            <li><a href="portfolio.php?netbet">Net Bet</a></li>
            <li><a href="portfolio.php?datadesigns">DataDesigns</a></li>
            <li><a href="portfolio.php?pittracker">Pit Tracker</a></li>
            <li><a href="portfolio.php?timecards">Time Cards</a></li>
            <li><a href="portfolio.php?bell">Pacific Bell</a></li>
            <li><a href="portfolio.php?sears">Sears</a></li>
        </ul>
    </div>
    <div id="Detail">

<?php switch ($_SERVER[QUERY_STRING]) { case "sears": ?> 

        <img src="images/sears.jpg" height="526px" width="317px" />
        <h1>Sears - 1980</h1>
        <p>I began my computer programming career with Sears, Roebuck &amp; Company in Chicago, Illinois. My cubicle was on the 52nd floor of the Sears Tower, not even halfway up the building.</p>
        <p>Sears employed more than 400 computer programmers all working in IBM 370 basic assembly language. Every programmer had to graduate from a three month in-house training program.</p>
        <p>In 1980, Sears had the world's largest computer network consisting of 35 mainframe computers in data centers around the United States and 3 more at the corporate headquarters in the Sears Tower. Every Sears store ran Series/1 mini computers. Each store connected to a mainframe, and each mainframe connected to the corporate system.</p>
        <p>In those days, IBM mainframes were hugely expensive, and revered. Most programmers were never even allowed to see a mainframe. Code was entered in pencil on coding sheets. Operators delivered printed output to each floor twice a day. Direct terminal access was limited and precious.</p>
        <p>In that environment, programmers were considered cheap. We were trained to squeeze every last bit of computing power out of those machines. Every line was optimized for performance. Every bit counted. It was a fantastic learning experience.</p>
        <p>I worked on a system called SENDEN (SEars National Data Exchange Network). Sears considered IBM's telecommunications software inefficient, so we wrote our own from scratch. I specialized in writing internal line traces to diagnose failures in Bisynchronous Protocol Transmissions.</p>
        <p>My last project at Sears was to apply the Huffman compression algorithm to data packets before transmission. The algorithm transforms bytes into a bit stream where a few bits can represent commonly occurring data patterns. This technique was found to be extremely efficient for business data containing reoccurring symbols.</p>

<?php break; case "bell": ?>

        <img src="images/yellow.gif" height="297px" width="253px" />
        <h1>Pacific Bell - 1989</h1>
        <p>In the late 1980's I worked in Southern California for Pacific Volt producing the Yellow Pages for Pacific Bell.</p>
        <p>At that time the Yellow Pages were produced by merging two disparate technologies together. The text listings were managed by a group of programmers running a legacy mainframe system. This was derived from software designed by the Los Angeles Times to print the newspaper's classified ads. The graphics subsystem was managed by a hardware group that used personal computers to control sophisticated digital graphics printers.</p>
        <p>The two systems didn't talk to each other. The listings software produced machine language output to be used as input to the graphics printers. The pages with listings would be produced with blank spaces where the graphics were to be inserted.</p>
        <p>All graphics would be produced and printed separately. Production workers cut out these images with scissors and physically glued them onto the listing pages. For the final product, this composite page would be scanned and the resulting image would be reprinted as one large graphic image.</p>
        <p>This process was expensive and made content changes slow and error prone. My job was to incorporate the graphics software into the listing system so an entire page could be produced in a single print run with no manual intervention. The graphics printer was a unique piece of hardware with a complex instruction set designed specifically for high quality digital printing. The listing system was written in IBM 370 assembly language and the program's output was binary machine code. This binary code was then used as the input to the graphics printer.</p>

<?php break; case "timecards": ?>

        <img src="images/timeclock.jpg" height="312px" width="390px" />
        <h1>Time Cards - 1992</h1>
        <p>Time Cards was a project I wrote as an independent contractor for Boyd Gaming Hotels and Casinos in Las Vegas, Nevada. The system was used at the Stardust Resort &amp; Casino, Fremont Hotel &amp; Casino, Main Street Station Casino, and at Sam's Town Hotel &amp; Gambling Hall.</p>
        <p>My software ran on personal computers that served as intelligent workstations. These connected peripheral hardware devices to the Boyd Gaming Corporate mainframe computers. The software automated the employee time and attendance system by capturing employee time card clock-in and clock-out events. The program sent this information to the mainframe system.</p>
        <p>Boyd Gaming and Hotel employees were provided with identification badges that could be read by magnetic card readers. Readers were located at all the employee clock-in and clock-out stations. When employees clocked in or out, the data would be deciphered, saved to disk, then forwarded to the AS400 employee time and attendance system.</p>
        <p>Personal computers equipped with hardware adapters communicated with AS400 mainframes using 5250 emulation software. Magnetic card swipe readers and display clocks were attached to the PCs serially through a communications port.</p>
        <p>Written in C++, the PC software connected to the AS400, acquired the local time from the mainframe, updated the peripheral clock displays with the correct settings, and waited for employee card swipe events.</p>
        <p>Redundancy was built into the system to prevent data loss. The card readers were designed to hold thousands of card swipe events. The PC logged every event to disk. If there was a communication failure between any reader and the PC, or between the PC and the AS400, the data would be retransmitted once a connection was reestablished. If employee data was lost or corrupted on the mainframe itself, the PC could retransmit all the logged entries to recover the information.</p>

<?php break; case "pittracker": ?>

        <img src="images/pittracking.jpg" height="310px" width="411px" />
        <h1>Pit Tracker - 1995</h1>
        <p>Pit Tracker was a system I wrote for Boyd Gaming Hotels and Casinos. My software helped casino pit bosses enter player evaluations into the corporate player tracking system.</p>
        <p>The system was written in C++ for MS-DOS. It ran on personal computers in the casino pit area. PCs communicated with the casino's AS400 via 5250 emulation. Normally the software ran in straight emulation mode, passing keystrokes through to the AS400, then displaying the resulting terminal screen on the monitor.</p>
        <p>The PCs were also attached to several peripheral hardware devices. Magnetic card readers were attached, capable of reading information from player club cards. Printers were attached, capable of producing UPC bar codes. Scanners were attached, capable of reading UPC bar codes and bubble cards used in standardized testing.</p>
        <p>If a gambler was to receive complementary items, his or her play needed to be evaluated by a pit boss to determine the value of the comp. When a player sat down, the pit boss would swipe the player's club card through the card reader. My software extracted the player's account information, printed the player's name on a bubble card along with the card number as a UPC bar code.</p>
        <p>The pit boss would fill in information on the bubble card after evaluating the gambler's play. The card would be passed through a scanning device attached to the PC. My software read the UPC bar code and the pit boss's entries on the card. The program maneuvered to the appropriate AS400 data entry screen for pit player evaluation tracking. The information was entered in and sent to the AS400 for processing.</p>
        <p>Pit bosses used the PC as an ordinary AS400 terminal when not swiping club cards or scanning bubble cards. Player information was accessed, credit limits checked or adjusted. When a card was swiped or scanned, my software had to determine where in the maze of AS400 screens the monitor was at that time. The program calculated the shorted path to the screen it needed to get to in order to process the new request. A long chain of keystrokes was assembled and sent to the AS400, one by one.</p>
        <p>Unique screen identifiers and keystroke values were placed in initialization text files. New AS400 screen could be created and defined and my program would automatically know how to maneuver through the system without having to be recompiled.</p>

<?php break; case "datadesigns": ?>

        <img src="images/groupone.jpg" height="361px" width="382px" />
        <h1>DataDesigns - 2000</h1>
        <p>DataDesigns was a division of Group 1 Software specializing in database marketing systems. Custom programs extracted operational data from a client's existing software systems. This data would be cleaned, standardized, and placed in a new database designed specifically for that client's marketing department.</p>
        <p>DataDesigns software enabled marketing departments to create promotions and campaigns, print customer mailing lists, and track the effectiveness of their marketing efforts.</p>
        <p>The system was originally designed for the hospitality industry. I helped build software for Westin Hotels and Resorts, Destination Hotels &amp; Resorts, and Manhattan East Suite Hotels.</p>
        <p>DataDesigns also had many clients in the gaming industry. The system was capable of merging data from separate properties into a unified marketing database. I helped create gaming database marketing systems for the Mirage Corporation, Showboat Casinos, Primm Valley Casino Resorts, Lady Luck Casinos, and Stations Casinos in Las Vegas.</p>
        <p>The client list for custom software included Carnival Cruise Lines, Nissan Corporation, the Milwaukee Journal Sentinel, Olan Mills, and the American Society of Civil Engineers.</p>
        <p>Windows programs were written in SQLWindows and Visual Basic. Interface programs for custom data extractions were written in C++. Oracle and Centura SQLBase were used for the marketing databases.</p>
        <p>While working for DataDesigns, I created DM1, a web based version of the database marketing system designed specifically for the hospitality industry. The system was CGI written in C++, using Oracle as the marketing database. Users queried the marketing database using simple English statements. The software would translate the statement into the proper SQL query statement, execute the request, and return the selected customer list.</p>

<?php break; case "netbet": ?>

        <img src="images/netbet.jpg" height="313px" width="382px" />
        <h1>Net Bet Sports - 2001</h1>
        <p>Net Bet Sports was a sports book ticket writing and back office system. The first version of the software was written for the Net Bet Corporation of St. Johns, Antigua. Later versions were leased for use at several other Caribbean sports books.</p>
        <p>This Windows-based system was designed for traditional sports betting operations. Customers called support personnel at licensed Caribbean sports books to place their wagers. Support personnel used the Net Bet Sports program to manage schedules, line changes and customer accounts.</p>
        <p>I wrote the basic user GUI with Visual Basic. I used low-level Windows API calls to paint the actual Wager Grid when standard Visual Basic Controls proved too resource intensive. Complicated game grading logic was written in C++ and then accessed as a DLL. I used Microsoft Access 2000 for the system's database.</p>
        <p>The system made extensive use of the Windows INET API to gather information from mainstream news sources over the Internet. The system retrieved upcoming schedules for all major sports, time changes, opening lines, baseball starting pitchers, and final scores online. I set up multiple data sources for each data stream, equipped with accompanying parsing software routines. The system would automatically access secondary sources if a primary source went down or altered their data format unexpectedly.</p>
        <p>The system used OLE Automation to access the functionality of Microsoft Excel. Personnel could enter schedule, line and score information into an Excel spreadsheet. This data could be read into the system as an alternative to accessing the Internet. I used Excel's formatting and printing capabilities to produce a wide variety of printed reports.</p>
        <p>The Net Bet Sports software was extremely customizable. Odds, lines and payouts could be adjusted for each individual customer. I designed the system to allow for customer credit. Customer balances were kept, payouts and collections tracked, and interest charges calculated.</p>

<?php break; case "jockeymania": ?>

        <img src="images/jockeymania.jpg" height="258px" width="380px" />
        <h1>JockeyMania - 2002</h1>
        <p>JockeyMania was an internet sports wagering exchange that I helped develop for the Jockey Club of Campos, Brazil. The system was designed to manage person to person wagering on the 2002 World Cup Soccer Championship.</p>
        <p>Wagering on World Cup Soccer is much different than wagering on traditional U.S. sporting events. Ties occur so often in International soccer matches that they become outcomes than are wagered on. A soccer match is much more like a horse race with three entries than it is like a standard sporting event between two teams.</p>
        <p>With the horse racing analogy in mind, we acquired an existing system named WagerMarket that supported person to person wagering on horse races. Internally the system stored soccer matches as though they were actually horse races. My responsibility was to create a new website front end that would present this data as soccer matches with three betting outcomes.</p>
        <p>I programmed the betting logic with JavaScript on the client side. An IIS Web Server ran Classic ASP with COM Objects written in Visual Basic. Oracle 8.0 was used for the system database.</p>
        <p>Because the target market was Brazil, the website was designed in three languages: Portuguese, Spanish and English. All text on all the web pages, all confirmation, error and informational messages, and all email text messages were translated from English into both Portuguese and Spanish. Since text message lengths can vary considerably by language, the website was tweaked to make sure messages fit on each web page in all languages.</p>
        <p>There are several ways to display betting odds and payouts. In the U.S., the 100 based convention is used. In Europe and South America, the decimal convention is the standard. I programmed the JockeyMania website to allow users to toggle between these two methods.</p>
        <p>I offloaded as much processing work onto the client's web browser as possible in an attempt to minimize the strain on the web and database server. Schedules, scores, and current best offers were maintained as XML files on the web server. Programming in JavaScript on the client side interpreted and displayed this information for the user.</p>
        <p>JavaScript and DHTML were used to create a scrolling ticker tape display on the client's browser. New betting offers on upcoming matches scrolled as hyperlinks. Clicking on a scrolling offer populated the wager screen with a matching offer to speed up the betting process.</p>

<?php break; case "playp2p": ?>

        <a title="View the PlayP2P Prototype" href="http://www.robertbohn.com/playp2p/home.htm"><img src="images/playp2p.jpg" height="358px" width="382px" /></a>
        <h1>PlayP2P - 2002</h1>
        <p><a title="View the PlayP2P Prototype" href="http://www.robertbohn.com/playp2p/home.htm">PlayP2P</a> was a person to person betting exchange based on the design of modern financial markets.</p>
        <p>PlayP2P was created to be a clearing house for wagers of all kinds. It was the first exchange to allow players to specify both the lines and the odds in any wager offer that they submitted into the market. I used Adobe Photoshop to create the initial design. A team of programmers built the system in ASP.NET with C#.</p>
        <p>The system was built to facilitate markets in any event with verifiable outcomes, such as the Academy Awards, election returns, high profile trials like the O. J. Simpson case, or even the results of TV shows. A particularly interesting market was "Who will survive this season on The Sopranos?"</p>
        <p>PlayP2P was flexible enough to accommodate different definitions of "lines" based on the underlying market. For most sporting events, the lines would refer to points scored. For elections it would be popular votes or electoral college results. For financial wagers, lines could refer to Indexes like the Dow Jones Industrial Average, or simply the closing price for most common commodities and securities.</p>
        <p>For a marketplace to succeed it needs members and liquidity. This is the biggest challenge faced by a new exchange. To overcome this hurdle, I designed a software robot trader. The robot was given access to the system at Catalina Sports, an online sports book located on Margarita Island in Venezuela.</p>
        <p>The robot responded to database triggers for new wagers and line movements at the sportsbook, by initiating, modifying or canceling corresponding offers in the PlayP2P exchange. Catalina Sports offered players the option to buy points at various odds. This feature allowed PlayP2P to offer a wide variety of lines and odds on every major sporting event, even before the first player signed on.</p>

<?php break; case "tellsafe": ?>

        <a title="View the TellSafe Prototype" href="http://www.robertbohn.com/tellsafe1/tellsafe.htm"><img src="images/tellsafe.jpg" height="313px" width="380px" /></a>
        <h1>TellSafe - 2003</h1>
        <p><a title="View the TellSafe Prototype" href="http://www.robertbohn.com/tellsafe1/tellsafe.htm">TellSafe</a> was an online service that provided companies with an independent means for managing the receipt, retention, and confirmation of anonymous employee complaints.</p>
        <p>TellSafe was designed to help companies comply with the Sarbanes-Oxley Act of 2002. This new law required audit committees of publicly traded companies to establish procedures for receiving anonymous complaints regarding their company's accounting practices.</p>
        <p>I designed and built this website using ASP.NET in VB.NET. I hosted this website out of my home office using a dedicated server running Windows Server 2000. Microsoft's SQL Server was used as the system's backend database.</p>
        <p>Security was a high priority for this website. VeriSign was chosen to provide website authentication and SSL data transmission encryption. Customer data was protected with SQL Server's built-in data encryption. Employee sections of the website were designed to provide total anonymity. No tracking or cookies of any kind were used. Even session cookies were disabled on sensitive pages.</p>
        <p>Respecting the privacy of people who visit your site is important when handling sensitive data such as anonymous complaints. The Platform for Privacy Preferences Project (P3P) is an industry standard that allows Internet browsers to auto-detect the site's privacy policies and alter its behavior based on those policy settings. TellSafe's website was certified for complete P3P compliance by the World Wide Web Consortium.</p>
        <p>Another major requirement was to make the website compatible with any browser an employee might use. The World Wide Web Consortium (W3C) provides specifications, guidelines, and tools that help developers do this. All the HTML content and cascading style sheets used on the website were validated by the W3C.</p>
        <p>Finally, the structure, verbiage, and HTML tags on every page were optimized to generate high placement for our industry keywords on the main search engine sites such as Google and Yahoo. Each page was designed to help search engine spiders index our site efficiently. TellSafe consistently appeared on the first page of all the major search engine sites, even though we did not pay for keyword advertising.</p>

<?php break; case "tellsafe2": ?>

        <a title="View the TellSafe Prototype" href="http://www.robertbohn.com/tellsafe/tellsafe.php"><img src="images/tellsafe2.jpg" height="335px" width="381px" /></a>
        <h1>TellSafe II - 2004</h1>
        <p>In 2004, I redesigned the <a title="View the TellSafe Prototype" href="http://www.robertbohn.com/tellsafe/tellsafe.php">TellSafe</a> website and application using open source software. The high licensing costs associated with Microsoft software and several highly publicized Microsoft security flaws combined to make open source the preferred platform at that time (<a title="view the press release" href="http://www.prweb.com/releases/2004/02/prweb104987.htm">view the press release</a>).</p>
        <p>I selected Fedora for the new operating system. The Fedora Core, distributed by Red Hat, is a Linux based operating system. This platform is famous for its stability and security. Fedora is a leader in many cutting-edge Linux security initiatives as well. This particular distribution included several important security features developed by Fedora engineers.</p>
        <p>The latest Apache HTTP Server came bundled with the Fedora Core distribution. Comodo was chosen to provide our digital website authentication and SSL data transmission encryption. I used the OpenSSL toolkit to implement SSL and TLS protocols that provided full-strength cryptography.</p>
        <p>I programmed TellSafe's application layer using PHP, an open source server side scripting language. MySQL was used for our back-end relational database system. This configuration of open source software (Linux, Apache, MySQL, PHP) is commonly called a LAMP installation.</p>
        <p>My exposure to the open source community had a profound effect on the way I designed TellSafe's new look and feel. The design of a commercial website is often the extension of the company's marketing department. Some of our competitor's websites were so over-complicated with marketing hype and industry jargon that I couldn't tell what services they actually provided.</p>
        <p>Open source websites were very different. They weren't selling something, they were distributing software and communicating ideas. They used plain, direct, conversational language.</p>
        <p>I redesigned TellSafe's website with this philosophy in mind. This is what our service does. This is how it works. Here is how you can become a subscriber. I think the final product reflected the clean, direct approach of open source software.</p>

<?php break; case "cyberbingo": ?>

        <img src="images/cyberbingo.jpg" height="388px" width="382px" />
        <h1>CyberBingo - 2005</h1>
        <p>CyberBingo is an integrated network of online bingo sites including CyberBingo, AlphaBingo, BingoFest, BingoCool, and BingoLocity. I designed and programmed the websites that were used to configure and maintain these multiple installations.</p>
        <p>CyberBingo is a good example of the new virtual corporation. While I was working in Las Vegas, management was in Canada, operations and support were in Antigua, gaming software programmers were in Spain, graphic designers and flash programmers were in Great Britain, the database administrator was in the Bahamas, and the actual servers were located in Denmark.</p>
        <p>Because I never met with my co-workers, this project required excellent communication skills and the ability to work independently. All contact was made through email, Instant Messenger, or occasional phone calls.</p>
        <p>I programmed the system logic with JavaScript on the client side, Classic ASP as the middleware, Visual Basic at the application level implemented as COM Objects, and SQL Server PSQL at the database level.</p>
        <p>Each administration website contained almost 200 dynamic web pages. The system allowed operators to configure bingo rooms, sessions and individual games. In 2005, the site was expanded to support video poker and video slots as well as traditional bingo games. This called for system upgrades to enabled the setup and management of progressive jackpots.</p>
        <p>The CyberBingo Administration website provided information that assisted help desk personnel as they handled support calls from players. It contained an area for the creation of marketing campaigns, and complex reporting features to help gauge the relative success of all marketing efforts. The system managed frequent player bonus programs, buddy programs, player rating systems, seasonal promotional offers, special signup offers, player referrals, and sliding scale deposit bonuses.</p>
        <p>Affiliates were an important part of the network. The administration website included a section that helped manage the large network of affiliates who drove traffic to each of the gaming websites. The system tracked the effectiveness of each link for each affiliate, calculated earned commissions, and sent electronic payments weekly. It also provided support for individual player deposits and withdrawals through the integration of nearly 20 unique payment platforms.</p>

<?php break; case "bobfund": ?>

        <img src="images/bobfund.jpg" height="374px" width="382px" />
        <h1>The Bob Fund - 2006</h1>
        <p>The Bob Fund is a private website I created to manage personal stock market investments.</p>
        <p>Reading about new features and options is important, but actually using them in a project is the best way to learn how they really work. One of the reasons I created this website was to explore the features in the latest version of Microsoft's Visual Studio 2005 and SQL Server Management Studio.</p>
        <p>I look at investing in the stock market as a fun, interesting hobby. I recently learned about a trading technique called Trend Following that can be applied to any kind of investment vehicle. This trading system can be expressed completely in mathematical terms.</p>
        <p>In Trend Following, the market generates buy and sell signals, and the management of your portfolio can be completely automated. To test various trading system parameters, I downloaded a vast amount of historical financial data. I ran case studies against data from commodity exchanges, various stock markets and currency exchanges.</p>
        <p>I took the formula that had the best historical results, and I programmed that logic into the website. I understand that past results don't guarantee future success, but it will be interesting to see what happens.</p>
        <p>I built this system using ASP.NET 2.0 in C# 2005 and SQL Server 2005. The system automatically updates prices, generates buy and sell signals, and performs complex risk management calculations to determine optimal position sizes. One advantage of having the system run as a website is that I can access and manage my accounts wherever I have Internet access.</p>

<?php break; case "mocca": ?>

        <img src="images/mocca.jpg" height="342px" width="388px" alt="" />
        <h1>Mocca Gallery - 2007</h1>
        <p>The Mocca Gallery is a personal blogging website. When you build websites professionally, everything is restricted by commercial considerations. I thought it would be nice to create a space without restrictions, where the only consideration would be the fun of making it.</p>
        <p>I was interested in returning to the open source community, their design solutions seem so elegant. I think open source projects are closer to the cutting edge of software design just because the developers have more fun there. The site runs on a self-publishing platform called WordPress. The operating environment is all open source, powered by an Apache web server, the PHP scripting language, and MySQL as the database engine.</p>
        <p>WordPress is an extremely popular and successful package. It is easy to install, configure and use. Strict adherence to the latest web standards makes this a very stable product using any modern browser. There is a heavy emphasis on configurability. The system relies on themes, templates, XHTML and CSS to control appearance and design layout. WordPress provides access to all the source code, so any personalization you can think of can be applied.</p>
        <p>This is the first web project I've written that I did not host onsite. I chose BlueHost.com as my remote hosting service. Administering the site through FTP and BlueHost's web file manager software is not as convenient as the hands-on access I am use to. But I can still control the site from anywhere in the world with a notebook computer and a WiFi connection.</p>

<?php break; case "wiseguys": ?>

        <img src="images/wiseguys.jpg" height="318px" width="380px" />
        <h1>Wiseguys - 2007</h1>
        <p>Wiseguys.com is a website that enables players to create and manage fantasy sports wagering leagues. Players form their own leagues, then compete against each other by wagering play money in a fantasy sportsbook. Up-to-the-minute line information is provided by several Las Vegas casinos and major offshore sportsbooks.</p>
        <p>This system is a fully operational online sportsbook designed specifically for the fantasy sports market. Schedules, scoring updates, opening lines, and instant line moves are sent to a web service directly from participating casinos and sportsbooks.</p>
        <p>The creation and grading of wager tickets is programmed in T-SQL using Microsoft's SQL Server 2005. database triggers detect final scores and automatically grade all wager tickets, including parlay and teaser bets.</p>
        <p>The website was constructed using ASP.NET 2.0 in C# 2005. XML was used extensively to help manage large amounts of content. Sports stories and other content are organized in XML documents. XSLT transformations are performed to translate this data into XHTML content appropriate for the web.</p>
        <p>Cascading Style Sheets (CSS) are used to control the appearance and layout of the XHTML displayed on the site. Stylesheets, master pages and themes allow customized  portals to appear differently for different league commissioners.</p>

<?php break; case "bully": ?>

        <img src="images/bully.jpg" height="368px" width="404px" />
        <h1>Bully Bully - 2007</h1>
        <p>I wrote the Bully Bully website to help me manage my stock portfolios online. I've been working with a technical trading system called Trend Following for the past year and needed a program that could automate that system.</p>
        <p>In Trend Following, the market generates buy and sell signals, and the management of your portfolio can be completely automated. To test various trading system parameters, I downloaded vast amounts of historical financial data. I ran case studies against data from commodity exchanges, various stock markets and currency exchanges.</p>
        <p>The system allows me to create new funds, specify which stocks will be monitored, adjust risk levels for each fund, deposit and withdraw money. The system automatically updates prices, detects buy and sell signals, and performs complex risk management calculations to determine optimal position sizes.</p>
        <p>I decided to build the site using open source software. Bully Bully runs on a Linux based remote hosting service running an Apache web server. The server side scripting language is PHP and the information is stored in a MySQL database.</p>
        <p>In the past year I've learned a great deal about XML and XSLT and wanted to design a site using that technology. The website processes requests with small amounts of PHP code that converts MySQL data into XML documents. The XML documents are converted into XHTML with XML transformation style sheets. The presentation layer is styled using CSS to transform the XHTML. All user actions are processed asynchronously with AJAX.</p>
        <p>I spent a lot of time in the design phase of this project. I just finished a terrific book on design and web usability called 'Don't Make Me Think' and wanted to incorporate all of the new ideas I'd learned into this new site.</p>

<?php break; case "sportsbook": ?>

        <img src="images/fsb.jpg" height="394px" width="410px" />
        <h1>Fantasy Sportsbook - 2007</h1>
        <p>FantasySportsBook.com is a website that enables players to create and manage fantasy sports wagering leagues. Players form their own leagues, then compete against each other by wagering play money in a fantasy sportsbook. Up-to-the-minute line information is provided by several Las Vegas casinos and major offshore sportsbooks.</p>
        <p>This system is a fully operational online sportsbook designed specifically for the fantasy sports market. Schedules, scoring updates, opening lines, and instant line moves are sent to a web service directly from participating casinos and sportsbooks.</p>
        <p>The creation and grading of wager tickets is programmed in T-SQL using Microsoft's SQL Server 2005. database triggers detect final scores and automatically grade all wager tickets, including parlay and teaser bets.</p>
        <p>The website was constructed using ASP.NET 2.0 in C# 2005. XML was used extensively to help manage large amounts of content. Sports stories and other content are organized in XML documents. XSLT transformations are performed to translate this data into XHTML content appropriate for the web.</p>
        <p>Cascading Style Sheets (CSS) are used to control the appearance and layout of the XHTML displayed on the site. Stylesheets, master pages and themes allow customized  portals to appear differently for different league commissioners.</p>

<?php break; case "tripres": ?>

        <a title="Visit TripRes.com" href="http://www.tripres.com/"><img src="images/tripres.jpg" height="531px" width="380px" /></a>
        <h1>TripRes.com - 2008</h1>
        <p>Support, maintain and enhance an online reservation and ticketing web service that also provides box-office management services to many of the theaters and showrooms in Las Vegas, Reno, Lake Tahoe and Laughlin, Nevada.</p>
        <p>The <a title="Visit TripRes.com" href="http://www.tripres.com/">TripRes.com</a> system manages events, general admission and assigned seating configurations. Sales can be made from box-office terminals, kiosk systems, PDA devices, websites and call centers. The system handles complex pricing schedules for multiple discounting options and third party broker agreements. The printing of the physical tickets is completely customizable for advertising of merchandise or upcoming events.</p>
        <p>At the core of the system architecture is a centralized Sybase database. Access is controlled by XML-RPC web services written in Java running on Linux servers. Reporting and system maintenance websites are written in JSP with Java Servlets on Apache/Tomcat web servers. Macromedia Flash is used on the sales front-ends that run on websites, kiosks and box-office terminals.</p>
        <p>The communications network is designed for high performance and maximum scalability. The Java XML-RPC web services coding is extremely low-level which provides precise control over TCP/IP socket communications, work request queues and database connection pools. Each Java web service is multi-threaded and designed to maximize response time in an environment that supports a large number of concurrent users and dynamic requests.</p>

<?php break; case "iphone": ?>

        <a title="view an iPhone Application specification page" href="iphone/iphone.html"><img src="images/iphone.jpg" height="386px" width="425px" /></a>
        <h1>iPhone Apps - 2010</h1>
        <p>My programming career has taken me from mainframes to personal computers to the internet, and most recently, to mobile devices. I began writing <a title="view an iPhone Application specification page" href="iphone/iphone.html">iPhone applications</a> for TripRes.com as a convenient way to handle support calls.</p>
        <p>TripRes is an online reservation and ticketing service that provides box-office management services to many of the theaters and showrooms in Las Vegas, Reno, Lake Tahoe and Laughlin, Nevada. The iPhone applications I'm authoring are designed to fix the most common support problems that our clients experience after hours and on the weekends. Issues that arise just before showtime need to be resolved quickly, and custom support software running on mobile devices offers the perfect solution.</p>
        <p>The existing system architecture was ideal for this project. All system requests are funneled through XML-RPC web services running on Linux servers. This makes the interface to the system completely device independent. A mobile device like the iPhone looks just like any other user that requests services from the system.</p>
        <p>I am currently working to expand the functionality of my iPhone applications by designing special versions for specific clients. This will give theater and showroom managers the power to take care of common issues without having to call for support. I am using the unique hardware device identifier in each iPhone to determine the functionality device owners are allowed to access.</p>


<?php break; case "webapps": default: ?>

        <img src="images/webapp.jpg" height="386px" width="425px" />
        <h1>Mobile Web Apps - 2010</h1>
        <p>Mobile web applications are browser-based, internet-connected applications used by devices such as smartphones. For applications that do not require access to the device hardware, building a website whose look and feel is optimized for a device is a much more efficient development technique. Using open source, standards based web technologies you can build an application that will run on any device that has a modern web browser.</p>
        <p>One of the most important advantages of writing mobile web applications is the shortened development cycle. Bugs can be fixed in real time. New features and even entire applications can be rolled out simply by updating the website. In contrast, applications written specifically for mobile devices require a time-consuming review and approval process. Another advantage is being able to work in a single development environment that will produce applications that are accessible on mobile devices running on many different operating systems.</p>
        <p>Being able to access the application using a standard web browser is an additional benefit of this technique. For example, the applications I've been programming have been specifically targeted for the iPhone. Safari is the best choice because of the way it duplicates the animation of a fully functional native iPhone application.</p>
        <p>The user interface is written in HTML, CSS and JavaScript. The jQuery JavaScript library is a terrific tool that simplifies document manipulation and the AJAX programming that is required in interactive applications. I use the jQTouch plugin to reproduce the specific look and feel of native iPhone applications.</p>
 
<?php break; } ?>

    </div>
</div>

</body>
</html>