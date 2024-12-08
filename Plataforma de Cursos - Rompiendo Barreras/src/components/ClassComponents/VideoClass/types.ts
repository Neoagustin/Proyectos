import { ILesson } from "@/interfaces/ILesson";

export interface IVideoClass {
    lessons: ILesson[];
    lesson: ILesson;
    courseId: string;
    classId: string;
};