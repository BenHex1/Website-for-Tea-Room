# ****************************************************************
# *** Create the table structure for the table 'CT_category' *****
# ****************************************************************

DROP TABLE IF EXISTS `CT_category`;
CREATE TABLE IF NOT EXISTS `CT_category` (
  `catID` varchar(6) NOT NULL default '',
  `catDesc` varchar(30) default NULL,
  PRIMARY KEY  (`catID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


# *******************************************************
# ***Insert record data for the table `CT_category`******
# *******************************************************

INSERT INTO `CT_category` (`catID`, `catDesc`) VALUES ('c1', 'Tearoom');
INSERT INTO `CT_category` (`catID`, `catDesc`) VALUES ('c2', 'Craft Shop');
INSERT INTO `CT_category` (`catID`, `catDesc`) VALUES ('c3', 'Village Store');
INSERT INTO `CT_category` (`catID`, `catDesc`) VALUES ('c4', 'Post Office');
INSERT INTO `CT_category` (`catID`, `catDesc`) VALUES ('c5', 'Bed and Breakfast');

# *************************************************************************
# *** Create the table structure for the table `CT_expressedInterest` *****
# *************************************************************************

DROP TABLE IF EXISTS `CT_expressedInterest`;
CREATE TABLE IF NOT EXISTS `CT_expressedInterest` (
  `expressInterestID` int(11) NOT NULL AUTO_INCREMENT,
  `forename` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `postalAddress` varchar(255) DEFAULT NULL,
  `mobileTelNo` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sendMethod` varchar(5) NOT NULL,
  `catID` varchar(6) default NULL,
  PRIMARY KEY (`expressInterestID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;


# ********************************************************************
# ***Insert record data for the table `CT_expressedInterest`**********
# ********************************************************************

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Emma', 'Anderson', '1 Blue Street, Newcastle Upon Tyne, NE2 3AA ', NULL, 'emma.anderson@northumbria.ac.uk', 'post', 'c2');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Christina', 'Vasiliou', '22 Yellow Avenue, Newcastle Upon Tyne, NE3 1AB', '07771111111', 'christina.vasiliou@northumbria.ac.uk', 'email', 'c5');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('John', 'Rooksby', '19 White Place, Newcastle Upon Tyne, NE2 2AA', '0701111111', 'john.rooksby@northumbria.ac.uk', 'email', 'c4');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Jonathan', 'Sanderson', NULL, '07411111123', 'jonathan.sanderson@northumbria.ac.uk', 'post', 'c1');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Garry', 'Elvin', '54 Red Street, Newcastle Upon Tyne, NE2 1XE', '07411111122', 'garry.elvin@northumbria.ac.uk', 'email', 'c3');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Sue', 'Jones', '20 Jones Street, Newcastle Upon Tyne, NE5 1BC','07002345671', NULL, 'post', 'c5');

INSERT INTO `CT_expressedInterest` (`forename`, `surname`, `postalAddress`, `mobileTelNo`, `email`, `sendMethod`, `catID`) VALUES ('Patrick', 'Bloggs', '15, Blogs Street, Durham, DH2 ABC', '07001212111', 'patrick&sheila@madeupemail.com', 'email', 'c1');