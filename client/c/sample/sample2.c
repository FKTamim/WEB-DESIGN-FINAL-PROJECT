#include "gridstore.h"
#include <stdlib.h>
#include <stdio.h>

typedef struct {
	GSTimestamp timestamp;
	GSBool active;
	double voltage;
} Point;

GS_STRUCT_BINDING(Point,
	GS_STRUCT_BINDING_KEY(timestamp, GS_TYPE_TIMESTAMP)
	GS_STRUCT_BINDING_ELEMENT(active, GS_TYPE_BOOL)
	GS_STRUCT_BINDING_ELEMENT(voltage, GS_TYPE_DOUBLE));

// Storage and extraction of a specific range of time-series data
int sample2(const char *addr, const char *port, const char *clusterName,
			const char *user, const char *password) {
	GSGridStore *store;
	GSTimeSeries *ts;
	Point point;
	GSTimestamp now;
	GSTimestamp before;
	GSQuery *query;
	GSRowSet *rs;
	GSResult ret = !GS_RESULT_OK;

	const GSPropertyEntry props[] = {
			{ "notificationAddress", addr },
			{ "notificationPort", port },
			{ "clusterName", clusterName },
			{ "user", user },
			{ "password", password } };
	const size_t propCount = sizeof(props) / sizeof(*props);

	// Acquiring a GridStore instance
	gsGetGridStore(gsGetDefaultFactory(), props, propCount, &store);

	// Creating a TimeSeries (Only obtain the specified TimeSeries if it already exists)
	gsPutTimeSeries(store, "point01",
			GS_GET_STRUCT_BINDING(Point), NULL, GS_FALSE, &ts);

	// Preparing time-series element data
	point.active = GS_FALSE;
	point.voltage = 100;

	// Store the time-series element (GridStore sets its timestamp)
	gsAppendTimeSeriesRow(ts, &point, NULL);

	// Extract the specified range of time-series elements: last six hours
	now = gsCurrentTime();
	before = gsAddTime(now, -6, GS_TIME_UNIT_HOUR);

	gsQueryByTimeSeriesRange(ts, before, now, &query);
	ret = gsFetch(query, GS_FALSE, &rs);
	while (gsHasNextRow(rs)) {
		GSChar timeStr[GS_TIME_STRING_SIZE_MAX];

		ret = gsGetNextRow(rs, &point);
		if (!GS_SUCCEEDED(ret)) break;

		gsFormatTime(point.timestamp, timeStr, sizeof(timeStr));
		printf("Time=%s", timeStr);
		printf(" Active=%s", point.active ? "true" : "false");
		printf(" Voltage=%.1lf\n", point.voltage);
	}

	// Releasing resource
	gsCloseGridStore(&store, GS_TRUE);

	return (GS_SUCCEEDED(ret) ? EXIT_SUCCESS : EXIT_FAILURE);
}

void main(int argc,char *argv[]){ sample2(argv[1],argv[2],argv[3],argv[4],argv[5]);}