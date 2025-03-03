import face_recognition
from PIL import Image
import numpy as np

#import face_recognition
import cv2
import numpy as np
from PIL import Image

def load_and_convert_image(image_path):
    """
    Loads an image and ensures it is in 8-bit RGB format.
    
    Args:
        image_path (str): Path to the input image.
    
    Returns:
        numpy.ndarray: The image as a NumPy array in RGB format.
    """
    try:
        # Load the image using OpenCV
        image = cv2.imread(image_path, cv2.IMREAD_UNCHANGED)

        if image is None:
            raise ValueError(f"Failed to load image: {image_path}")

        # Convert the image to RGB format (if it has an alpha channel)
        if image.shape[2] == 4:  # Check if the image has an alpha channel
            image = cv2.cvtColor(image, cv2.COLOR_BGRA2BGR)

        # Convert the image to RGB (OpenCV loads images in BGR format by default)
        image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

        return image_rgb

    except Exception as e:
        print(f"Error loading or converting image: {e}")
        return None

def recognize_face(known_image_path, test_image_path):
    """
    Recognizes faces in the test image using the known face image.
    
    Args:
        known_image_path (str): Path to the known face image.
        test_image_path (str): Path to the test image.
    """
    try:
        # Load and convert the known image
        known_image = load_and_convert_image(known_image_path)
        if known_image is None:
            raise ValueError("Failed to load or convert the known face image.")

        # Get the encoding for the known image (first face encoding)
        known_face_encodings = face_recognition.face_encodings(known_image)
        if not known_face_encodings:
            raise ValueError("No faces found in the known face image.")
        known_face_encoding = known_face_encodings[0]

        # Load and convert the test image
        test_image = load_and_convert_image(test_image_path)
        if test_image is None:
            raise ValueError("Failed to load or convert the test image.")

        # Find all face locations and encodings in the test image
        test_face_locations = face_recognition.face_locations(test_image)
        test_face_encodings = face_recognition.face_encodings(test_image, test_face_locations)

        # Check if the face in the test image matches the known face
        for test_face_encoding in test_face_encodings:
            match = face_recognition.compare_faces([known_face_encoding], test_face_encoding)

            if match[0]:
                print("Face recognized!")
            else:
                print("Unknown face.")

    except Exception as e:
        print(f"Error: {e}")

# Main script
if __name__ == "__main__":
    # Paths to the images
    known_image_path = "C:\\Users\\romdh\\Downloads\\image1.png"
    test_image_path = "C:\\Users\\romdh\\Downloads\\image1.png"

    # Perform face recognition
    recognize_face(known_image_path, test_image_path)

# import face_recognition
# import cv2
# from PIL import Image

# # Load a sample picture and convert it to RGB format
# image_path = "C:\\Users\\romdh\\Downloads\\image1.png"
# image = Image.open(image_path)

# # Ensure the image is in RGB format (convert if necessary)
# image_rgb = image.convert("RGB")

# # Convert to a NumPy array for use with face_recognition
# known_image = face_recognition.load_image_file(image_rgb)

# # Get the encoding for the known image (first face encoding)
# known_face_encoding = face_recognition.face_encodings(known_image)[0]

# # Initialize variables
# face_locations = []
# face_encodings = []

# # Access the camera
# video_capture = cv2.VideoCapture(0)  # 0 for the default camera

# while True:
#     # Capture frame-by-frame
#     ret, frame = video_capture.read()

#     if not ret:
#         break

#     # Convert the image from BGR color (OpenCV uses BGR by default) to RGB color
#     rgb_frame = frame[:, :, ::-1]

#     # Find all face locations and face encodings in the current frame
#     face_locations = face_recognition.face_locations(rgb_frame)
#     face_encodings = face_recognition.face_encodings(rgb_frame, face_locations)

#     # Check if the face is recognized
#     for face_encoding in face_encodings:
#         match = face_recognition.compare_faces([known_face_encoding], face_encoding)

#         if match[0]:
#             print("Face recognized!")
#         else:
#             print("Unknown face.")

#     # Display the results
#     for (top, right, bottom, left) in face_locations:
#         # Draw a rectangle around the face
#         cv2.rectangle(frame, (left, top), (right, bottom), (0, 255, 0), 2)

#     # Display the resulting image in a window
#     cv2.imshow('Video', frame)

#     # Break the loop if 'q' is pressed
#     if cv2.waitKey(1) & 0xFF == ord('q'):
#         break

# # Release the camera and close windows
# video_capture.release()
# cv2.destroyAllWindows()
