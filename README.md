# helper

The motivation is to make the output more visible
and at the same time to mark the exact position of the output.

 Methods:

# Everything is structured and easy to read again
    Helper::e($variable);
# Returns all declared classes
    Helper::getClasses();
# Returns all methods of a class
    Helper::getClassMethod('Helper');
# Outputs the class name including namespace
    Helper::getClassName(new Helper);
# Returns all methods that can be used
    Helper::getSelfMethodes();
# Describes something about an array object
    Helper::arrayObject();
# Timing. Start time
    Helper::timeStart();
# Timing. Stop time
    Helper::timeStop();
# Output time measurement duration
    Helper::getDuration();