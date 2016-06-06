# Setting up Selenium for Java Web Automation Testing

### Pre

#### Java

Download Java development kit.


#### Set up your development environment

Go to the Eclipse website and select download.
[Image of Eclipse website](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction1.png)

Select the Eclipse IDE for Java Developers
[Image of Eclipse website](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction2.png)

Download and install Eclipse
[Image of Eclipse website](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction3.png)

#### Set up a test project

Create a new project
[Create new project](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction4.png)

Give it a name
[Give it a name](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction5.png)

Create a test class. Typically this would describe the area you are testing.
[Create new class](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction6.png)
[Create new class](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction7.png)


#### Add the Selenium Environment

Download the Java library

Open the properties for the Java project
[Add the Selenium](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/missing-instruction1.png)

Open the `Java Build Path`
[Add the Selenium](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/missing-instruction1.png)

Import the `.jar` files from the downloaded zip folder.
[Add the Selenium](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/selenium-lib-import.gif)


#### Example test

Add the following code:
```
package testseleniumproject;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

public class testclass {
	private WebDriver driver;

	public testclass() {
		// TODO Auto-generated constructor stub
	}
	
	
	@Before
	public void setUp() throws Exception{
		driver = new FirefoxDriver();
	}
	

	@Test
	public void testthis() throws Exception{
		driver.get("http://www.google.com");
		driver.findElement(By.name("q")).sendKeys("selenium");
		Thread.sleep(1000);
		driver.findElement(By.name("btnG")).click();
		Thread.sleep(10000);
	}
	
	@After
	public void tearDown() throws Exception{
		driver.quit();
	}

}
```

Press run on the top
[Run](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/instruction8.png)


### Results
![Run](https://raw.githubusercontent.com/kweaver00/tutorials/master/setting-up-selenium-for-java/example-test.gif "")


### Other

Possible errors:
1. You do not have Java installed
2. Java is not in your path
3. You do not have Firefox on your computer
