# -*- coding: utf-8 -*-

def extcheck(filename):
    EXT = ("MP4", "MOV", "AVI", "MKV", "mp4", "mov", "mkv", "avi")
    chk = False
    ext = filename.rsplit(".", 1)[-1]

    if ext in EXT:
        print("its video")
        chk = True
    else:
        print("its no video")
        chk = False
    return chk