# ViewPanelPHP 
## Information
Welcome to the ViewPanelPHP Github repository, working alongside the BitBucket repository (https://bitbucket.org/Zero3X/viewpanelphp). This software falls under the GNU GENERAL PUBLIC LICENSE V3. Any third party libraries, images or fonts fall under their own licenses (which should be included).

##### Version
The current development version is 3.0.1 'Liberty'.
There is no stable release.

## Mission

ViewPanel's goal is to be as lightweight, easy to use and functionaly complete as possible. This may sound paradoxical but through a simple and robust plugin system everything should go to plan... Right?

## History
Started in 2009 as a lightweight blogging script.
Abandoned in 2011 as a mess of bolted on features.
Almost lost forever in Jan 2016 with the shutdown of Google Code.
Reclaimed and rebooted in July 2016.

## Branch Organisation

Branches now follow standard GitFlow organisation.
* The master branch contains the most up to date and stable release.
* The develop branch contains the most active development. Development branches will eventually merge into release and may branch off from master. 
* The release branch contains near stable code - possible release candiate versions even. Will eventually merge into master and then back into development.
* The hotfix branch is for must-address issues that need to be fixed. Will merge back into master and into development. 

For more information see [this](http://nvie.com/posts/a-successful-git-branching-model/).

##### Versioning Convention
X.Y.Z 'NAME'

X - Major release number (multiple added features)

Y - Patch number (major bugfix or feature improvement)

Z - Revision number (minor bugfix)

NAME - To change with every patch or major release.