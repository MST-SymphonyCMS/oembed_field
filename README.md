# Field: oEmbed #

Version: 1.3.2

## Easily embed videos/images from ANY* website that implements the oEmbed format ##

@see <http://oembed.com>

### SPECS ###

- Adds a field that takes as input the link to the page that has the embeded media
- Caches the oEmbed XML info into the database
	- Easily incorporate this XML via your Data Sources
	- Refreshes the info each time the entry is saved
- *Currently supported services: 
	- **Vimeo**
	- **Youtube**
	- **Dailymotion**
	- **Twitter**
	- Flickr
	- Qik
	- Viddler
		- Anybody can add a service       
		  Just fork, code the missing [Service Driver](https://github.com/Solutions-Nitriques/oembed_field/blob/master/lib/class.serviceDriver.php) and request a pull!

### REQUIREMENTS ###

- Symphony CMS version 2.2.3 and up (as of the day of the last release of this extension)

### INSTALLATION ###

- Unzip the oembed_field.zip file
- (re)Name the folder **oembed_field**
- Put into the extension directory
- Enable/install just like any other extension

*Voila !*

<http://www.nitriques.com/open-source/>

<http://www.deuxhuithuit.com/>

### TODO ###

- Allow appending parameters to oEmbed request from section editor
- Adds a auto-refresh data mechanism
- Automatically add sites in the JIT authorized sites (for thumbnail and image services)
- Add a field setting: Authorize only certain drivers (needs discussion on that)
- Add MySpace driver: Waiting for **MySpace** to complete their oEmbed service


