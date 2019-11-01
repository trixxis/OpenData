import csv

with open('C:\wamp64\www\Site\data\prod-region-annuelle-enr.csv', 'r') as csv_file:
    csv_reader = csv.reader(csv_file)

    with open('C:\wamp64\www\Site\data\prod-region-ann-enr-opti.csv', 'w', newline='') as new_file:

        csv_writer = csv.writer(new_file, delimiter=';')

        csv_writer.writerow(['Annee', 'Code INSEE région', 'Région', 'Production_hydraulique', 'Production_bioénergies', 'Production_éolienne', 'Production_solaire', 'Production_elec', 'Production_gaz', 'Production_totale'])

        next(csv_reader)

        for line in csv_reader:
            csv_writer.writerow(line[0])


    
     
