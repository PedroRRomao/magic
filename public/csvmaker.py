import csv
import os

path_dict = {}

# directory = os.path.realpath('ORI')
#
# [os.rename(os.path.join(directory, f), os.path.join(directory, f).replace(' ', '_')) for f in os.listdir(directory)]
#
with open('cards.csv', mode='w') as magic_file:
    magic_writer = csv.writer(magic_file, dialect='excel')
    count = 1
    d = "img/ORI"
    for path in os.listdir(d):
        full_path = os.path.join(d, path)
        if os.path.isfile(full_path):
            path_dict[count] = full_path
            count+=1

    d = "img/mana"
    for path in os.listdir(d):
        full_path = os.path.join(d, path)
        if os.path.isfile(full_path):
            path_dict[count] = full_path
            count+=1

    for key in path_dict.keys():
        magic_file.write("%s,%s\n"%(key,path_dict[key]))
        # magic_writer.writerows(path_array)
