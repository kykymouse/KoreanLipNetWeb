# -*- coding: utf-8 -*-
from util import extcheck

#from camera import VideoCamera
import os
import datetime
import threading
#import tensorflow as tf
import numpy as np

input_dir= "inputVideo/"
upload_dir= "uploadVideo/"
output_dir= "outputVideo/"

def predict():
    videofiles = os.listdir(upload_dir)
    videofiles.sort()
    if len(videofiles) != 0:
        try:
            content = videofiles[0]
            os.system('mv ' + upload_dir + content + " " + input_dir)
            print(content)
            if extcheck(content): #video
                os.system('python ../LipNet/evaluation/predict.py ../LipNet/evaluation/2019\:08\:17\:14\:21\:18/weights973.h5 ./inputVideo/' + content)            
        except:
            print("Try Except Error")
            pass
    
    threading.Timer(5, predict).start()
predict()