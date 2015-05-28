
<?php 
	define("TITLE", "Web Server Tutorial | David Mendez");
	include('includes/php/header.php'); 
?>

<!-- Write content here -->

<div id="Content">
<h1 class="heading">Web Server tutorial</h1>

	<p>
	So you want to host your own site? Good for you. I will show you how to setup up your own web server
	step by step.
	</p>
	<p>According to Wikipedia: a <a href="http://en.wikipedia.org/wiki/Web_server">web server</a> is an information technology that processes requests via HTTP, the basic network protocol used to distribute information on the World Wide Web. The term can refer either to the entire computer system, an appliance, or specifically to the software that accepts and supervises the HTTP requests.[1]</p>
	
	<h2>Things that you will need:</h2>
	
	<ol>
	<li>Old Computer</li>
	<li>Ubuntu Web Server 14.04</li>
	<li>Ethernet cables rj45</li>
	<li>Patience ;-)</li>
	</ol>
	
	<h2>Step 1: Create a bootable Ubuntu CD.</h2>
	<p>a) Download: <a href="http://www.ubuntu.com/download/server">Ubuntu Server</a></p>
	<p>Ubuntu is a Linux operating system that is developed by canonical.</p>
	<p>b) Burn the iso img file to a empty cd or dvd.</p>
	<p>
	Here is: <a href="http://www.ubuntu.com/download/server/install-ubuntu-server">Installing Ubuntu for General Use</a> instructions.
	</p>
	<p>Search for creating a linux live cd in youtube for a video tutorial.</p>
	<h2>Step 2: Install Ubuntu Server 14.04 to your Computer.</h2>
	<p>Insert The Ubuntu cd you created earlier and install the Ubuntu operating system.</p>
	<p>
	Here is a detailed guide: <a href="http://www.servermom.org/basic-ubuntu-setup-before-building-a-working-server/85/">http://www.servermom.org/basic-ubuntu-setup-before-building-a-working-server/85/</a>
	</p>

	<h2>Step 3: Install SSH</h2>
	<p>Downloading openssh-server will allow you to remotely control your computer
	by connecting to it via ssh. For example, I connect to my home server by typing its
	ip address in a terminal(linux or mac) or using putty(windows). More on this in step 4.</p>
	<p>a) Run the command below to install openssh-server:</p>
	<span class="gray-highlight"><p>sudo apt-get install openssh-server</p></span>
	<p>b) You can make aditional changes by editing the ssh config file:</p>
	<span class="gray-highlight"><p>sudo nano /etc/ssh/sshd_config</p></span>
	<p>c) Restart openssh-server:</p>
	<span class="gray-highlight"><p>sudo /etc/init.d/ssh restart</p></span>
	<p>All done!</p>
	
	<h2>Step 4: Remotely connect to your computer via terminal(linux or mac) 
	 or <a href="http://putty.org">putty</a>(windows).</h2>
	<p>Linux computers and mac's have built in tools to connect via ssh. if you are using
	 a microsoft windows machine download putty. To download putty search for it 
	on google.com</p>
	<p>a) Start by typing ifconfig on your server and look for your machine's ip address.</p>
	<p>You should look for something like this next to eth0, eth1, depending on your 
	particular setup:</p>
	<p>eth0</p>
	<p>inet addr: 192.168.1.100. This is your ip adress</p>
	<p>Go to your client computer and launch a terminal window or putty(windows).</p>
	<p>Type in the ip adress of your server in terminal:</p>
	<p>ssh mike@192.168.1.100</p>
	<p>Similar execution in putty.</p>
	<p>All done! You should be able to connect to your server via ssh.</p>
	
</div>

<!-- END content -->

<?php  include('includes/php/menu.php'); ?>

<!-- BlueRobot was here. -->

</body>
</html>