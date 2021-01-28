# Call_Log

My plan is to create a web interface to the call history, with the ability to add my own "Caller ID" for each call. And have the ability to call another script if a new call is recieved. (i.e. be able to email or send a message of some sort, with the personal caller id info.)

So there is a script to retrive the call log from the OBIHAI OBi100, and add it to a mysql database, and trigger another script if there are new calls.

Then a web interface to view the calls, and view the caller id info, and add caller id info.

Create export to CSV function.

Post to OpenCNAM

Check robocall

Lookup the number via various APIs

Report SPAM

Automatically report obnoxious call

Post to an API

As for June 2015, I have a ruby script that will retrieve and parse the data from the first page of the "Call History" of the OBi100.

