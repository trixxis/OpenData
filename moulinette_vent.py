import csv

with open('C:\wamp64\www\Site\data\meteo-regional.csv', 'r') as csv_file:
    csv_reader = csv.reader(csv_file)

    with open('C:\wamp64\www\Site\data\meteo-regional-juillet-2019.csv', 'w', newline='') as new_file:

        csv_writer = csv.writer(new_file, delimiter=';')

        csv_writer.writerow(['Date', 'Code_INSEE_region', 'Region', 'Vitesse_vent', 'Rayonnement_solaire'])

        next(csv_reader)

        for line in csv_reader:
            if "2019-07" in line[0]:
                csv_writer.writerow(line)


    
     
