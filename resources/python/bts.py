import joblib
import sys
import os

current_dir = os.path.dirname(os.path.realpath(sys.argv[0]))
project_path = os.path.dirname(current_dir)

model = joblib.load(project_path + '/python/model/model_bts.pkl')
data = sys.argv
data = {'Longitude': [data[1]], 'Latitude': [data[2]], 'Height ': [data[3]], 'Dir': [data[4]], 'Cell_Type': [data[5]]}

prediksi = int(model.predict(data))

if prediksi == 0:
	hasil_prediksi = 'Green'
elif prediksi == 1:
	hasil_prediksi = 'Yellow'
elif prediksi == 2:
	hasil_prediksi = 'Red'

print(hasil_prediksi)