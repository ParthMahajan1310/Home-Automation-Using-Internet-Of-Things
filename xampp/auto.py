import RPi.GPIO as GPIO
import urllib2
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(3,GPIO.OUT)
GPIO.setup(5,GPIO.OUT)
GPIO.setup(7,GPIO.OUT)
GPIO.setup(8,GPIO.OUT)
GPIO.setup(11,GPIO.OUT)
true = 1
while(true):
                try:
                        response1 = urllib2.urlopen('http://kesarinandana.com/kn/xampp/buttonStatus1.php')
                        status1 = response1.read()
			
			response2 = urllib2.urlopen('http://kesarinandana.com/kn/xampp/buttonStatus2.php')
                        status2 = response2.read()
			
			response3 = urllib2.urlopen('http://kesarinandana.com/kn/xampp/buttonStatus3.php')
                        status3 = response3.read()
                        
                        response4 = urllib2.urlopen('http://kesarinandana.com/kn/xampp/buttonStatus4.php')
                        status4 = response3.read()
                        
                        response5 = urllib2.urlopen('http://kesarinandana.com/kn/xampp/buttonStatus5.php')
                        status5 = response3.read()
                
		except urllib2.HTTPError, e:
                                        print e.code

                except urllib2.URLError, e:
                                        print e.args

                #print status
                if status1=='ON':
                                GPIO.output(3,True)
                elif status1=='OFF':
                                GPIO.output(3,False)
                
                if status2=='ON':
                                GPIO.output(5,True)
                elif status2=='OFF':
                                GPIO.output(5,False)
                
                if status3=='ON':
                                GPIO.output(7,True)
                elif status3=='OFF':
                                GPIO.output(7,False)
                                
                if status4=='ON':
                                GPIO.output(8,True)
                elif status4=='OFF':
                                GPIO.output(8,False)
                                
                if status5=='ON':
                                GPIO.output(11,True)
                elif status5=='OFF':
                                GPIO.output(11,False)                

		


