DROP TABLE IF EXISTS voevents;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE voevents (
  ID INT NOT NULL AUTO_INCREMENT UNIQUE,
  IVO VARCHAR(500) NOT NULL UNIQUE,
  Title VARCHAR(250) NOT NULL,
  Author VARCHAR(250) NOT NULL,
  XML VARCHAR(500) NOT NULL,
  Published DATETIME NOT NULL,
  Reference VARCHAR(500) NOT NULL,
  Institute VARCHAR(250) NOT NULL,
  Description TEXT NOT NULL,
  Position VARCHAR(200) NOT NULL,
  Picture VARCHAR(500) NOT NULL,
  PRIMARY KEY (IVO),
  KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS emails;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE emails (
  ID INT NOT NULL AUTO_INCREMENT UNIQUE,
  Email VARCHAR(200) NOT NULL UNIQUE,
  Date DATETIME NOT NULL,
  PRIMARY KEY (Email),
  KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;